<?php

namespace PassGeneration\SmartTap;

use Google\Service\Resource as GoogleResource;
use Google\Exception as GoogleException;
use PassGeneration\SmartTap\SmartTap as SmartTap;
use GuzzleHttp\Psr7\Request as GuzzleHttpRequest;

/**
 * Class SmartTapResource
 *
 * The "smarttap" collection of methods.
 * Typical usage is:
 *
 *   $walletObjectsService = new WalletObjectsService(...);
 *   $smartTap = $walletObjectsService->smartTap;
 */
class SmartTapResource extends GoogleResource
{
    /**
     * Inserts the smart tap. (smarttap.insert)
     *
     * @param SmartTap $postBody
     * @param array $optionalParameters
     * @return GuzzleHttpRequest
     * @throws GoogleException
     */
    public function insert(
        SmartTap $postBody,
        array $optionalParameters = []
    ): GuzzleHttpRequest {
        return $this->call(
            'insert',
            array_values(array_merge(
                [
                    'postBody' => $postBody,
                ],
                $optionalParameters
            )),
            SmartTap::class
        );
    }
}
