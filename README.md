# php-modern-google-pay

A modern, PSR-compliant, refactor of the Google Pay for Passes PHP library.

For an example on how to use this package, see the bottom of this readme.

# Why does this package exist?

I had a recent requirement to implement the "Save to Google Pay" button on a project I was working on, and after reading the documentation, I found the example PHP code provided was largely a [10,000+ line file with many, many classes inside of it](https://github.com/google-pay/passes-rest-samples/blob/master/php/Walletobjects.php) that wasn't able to be autoloaded, wasn't PSR-compliant, and was generally a headache to understand. With this in mind I set out to refactor the entire codebase to be PSR-compliant, utilise PHP8+ typing where practical, and reorganise all the classes to be namespaced as I thought reasonable.

# What did I do?

Admittedly, I did get my head down and just "get it done" so this list won't be comprehensive, but the majority of what I did consisted of:

 - Added type hints
 - Re-organised classes
 - Made code PSR-12 compliant*
 - Spent some time DRYing up code and removing dead code
 - Corrected doc blocks with incorrect syntax or incorrect hinting
 - Made class setter methods fluent
 - Added missing class properties
 - Initialised all class properties as null*

*The code isn't strictly PSR-12 compliant as I haven't ran it through a sniffer, but for the most part it should be.

*I had to initialise all class properties as null because of the code in Google\Model that accesses them before initialisation (see below). I wasn't going to check the 10,000+ lines and see which ones are accessed, so I simply initialised them all.

    $result = $this->getSimpleValue($val);

    if ($result !== null) {
        $object->$key = $this->nullPlaceholderCheck($result);
    }

## Considerations

It wasn't possible for me to understand immediately the correct visibility of all the class properties, some were accessed via getters, some directly, some inside the class itself, some outside. As a result, I made the decision to make all class properties public.

I didn't realise until mid-way the refactor that there were some "unused" class properties that actually made known the typings of the used properties as a string -- e.g. public $barcodeDataType = 'Google_Walletsobjects_Barcode' -- so some typings are mixed or array, where they could be Barcode or Barcode[].

The main task here was to reorganise the code so that it was more readable and maintainable, I didn't spend too much time correcting comments, etc. so some comments may be irrelevant or outright wrong. This wasn't a rewrite of the library as much as a reorganisation + typings.

# What didn't I do?
Run any unit tests, or ensure it works for anything other than my specific use-case being generating a JWT for Offers.

# Known bugs

## Types as array|null, instead of array|SomeClass|array

It appears the Google library sets properties to a class, then to an array or vice versa for some reason.

    /**
     * @var Barcode|null
     */
    public Barcode|null $barcode = null;

Should be

    /**
     * @var array|Barcode|null
     */
    public array|Barcode|null $barcode = null;

## Returning just GuzzleHttpRequest instead of GuzzleHttpRequest|ExpectedClass

This was something I didn't realise until later on. I've fixed it for my use case, the Offer Class generation, but others will need fixing.

     * @return GuzzleHttpRequest
     * @throws GoogleException
     */
    public function insert(
        OfferObject $postBody,
        array $optionalParameters = []
    ): GuzzleHttpRequest {
        return $this->call(
            'insert',
            [array_merge(
                [
                    'postBody' => $postBody,
                ],
                $optionalParameters
            )],
            OfferObject::class
        );
    }

Should be

     * @return GuzzleHttpRequest|OfferObject
     * @throws GoogleException
     */
    public function insert(
        OfferObject $postBody,
        array $optionalParameters = []
    ): GuzzleHttpRequest|OfferObject {
        return $this->call(
            'insert',
            [array_merge(
                [
                    'postBody' => $postBody,
                ],
                $optionalParameters
            )],
            OfferObject::class
        );
    }

# Reporting issues

You are welcome to raise PRs or submit issues, this project will be maintained (though not full-time).

# Example usage

Create a Service Account and set up the required permissions in order to access the REST API, as found in Google's documentation here: https://developers.google.com/pay/passes/guides/basic-setup/get-access-to-rest-api.

Generate a Service Account key and download the credentials JSON. [This link](https://stackoverflow.com/questions/46287267/how-can-i-get-the-file-service-account-json-for-google-translate-api) might help if you get stuck.

Run the following PHP to generate a JWT:

    $json = file_get_contents('YOUR-SERVICE-ACCOUNT-CREDENTIALS.json');

    $isserId = 3388000000000000000; // YOUR ISSUER ID

    $generator = new \PassGeneration\GooglePassGenerator(
      'YOUR-EMAIL@YOUR-PROJECT.iam.gserviceaccount.com',
      $json,
      'YOUR APPLICATION NAME',
      $issuerId,
      [
          'http://localhost:3000',
      ]
    );

    $randomClassIdString = md5(uniqid('', true)); // Not cryptographically secure, just an example
    $classId = sprintf("%s.%s", $isserId, $randomClassIdString);

    $randomObjectIdString = md5(uniqid('', true)); // Not cryptographically secure, just an example
    $objectId = sprintf("%s.%s", $isserId, $randomObjectIdString);

    $jwt = $generator->makeJwt(
     \PassGeneration\VerticalTypes\Enums\VerticalType::OFFER,
      $classId,
      $objectId
    );

    die(var_dump($jwt));

This will return a JWT such as the below:

    eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJpc3MiOiJvYmZ1c2NhdGVkIiwiYXVk...

Copy this JWT and use it to generate some HTML as below*

	<html>
		<head>
			<script src="https://apis.google.com/js/platform.js" async defer></script>
		</head>
		<body>
			<div id="google_wallet_button"></div>

			<script>
			  window.onload = () => {
					gapi.savetoandroidpay.render(
						'google_wallet_button',
						{
							jwt: 'eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJpc3MiOiJvYmZ1c2NhdGVkIiwiYXVk...',
							onsuccess: 'successHandler',
							onfailure: 'failureHandler',
						}
					)
			  }
			</script>
		</body>
	</html>

*Personally I would make an API request from your site to your API responsible for generating the JWT and obtain it that way, but I am using a copy-paste in this guide for simplicity.

See [Google's documentation](https://developers.google.com/pay/passes/reference/s2w-reference) for more info on rendering HTML buttons.
