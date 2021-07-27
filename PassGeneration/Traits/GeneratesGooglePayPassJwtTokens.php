<?php

namespace PassGeneration\Traits;

use Firebase\JWT\JWT;

/**
 * Trait GeneratesGooglePayPassJwtTokens
 *
 * Defines JWT format for a Google Pay Pass.
 *
 * to check the JWT protocol for Google Pay Passes, check:
 * https://developers.google.com/pay/passes/reference/s2w-reference#google-pay-api-for-passes-jwt
 *
 * also demonstrates RSA-SHA256 signing implementation to make the signed JWT used
 * in links and buttons. Learn more:
 * https://developers.google.com/pay/passes/guides/get-started/implementing-the-api/save-to-google-pay
 *
 * Copyright 2019 Google Inc. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
trait GeneratesGooglePayPassJwtTokens {
    public function generateUnsignedJwt(
        string $serviceAccountEmailAddress,
        string $audience,
        string $jwtType,
        array $payload,
        array $origins
    ): array {
        return [
            'iss' => $serviceAccountEmailAddress,
            'aud' => $audience,
            'typ' => $jwtType,
            'iat' => time(),
            'payload' => $payload,
            'origins' => $origins,
        ];
    }

    public function generateSignedJwt(
        string $serviceAccountEmailAddress,
        string $audience,
        string $jwtType,
        array $payload,
        array $origins
    ): string {
        // Sign the JWT using the same private key used in OAuth.
        // See https://firebase.google.com/docs/auth/admin/create-custom-tokens#create_custom_tokens_using_a_third-party_jwt_library
        return JWT::encode(
            $this->generateUnsignedJwt(
                $serviceAccountEmailAddress,
                $audience,
                $jwtType,
                $payload,
                $origins
            ),
            SERVICE_ACCOUNT_PRIVATE_KEY,
            'RS256'
        );
    }
}
