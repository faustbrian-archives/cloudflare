<?php

/*
 * This file is part of CloudFlare PHP Client.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\CloudFlare\Request\Modifiers;

use BrianFaust\Contracts\HttpClient;
use BrianFaust\Modifiers\AbstractModifier;

class AuthenticationModifier extends AbstractModifier
{
    public function apply()
    {
        $httpClient = $this->httpClient;

        $httpClient->addHeader('X-Auth-Key', $httpClient->getConfig('key'));
        $httpClient->addHeader('X-Auth-Email', $httpClient->getConfig('email'));

        if ($serviceKey = $httpClient->getConfig('serviceKey')) {
            $httpClient->addHeader('X-Auth-User-Service-Key', $serviceKey);
        }

        return $httpClient;
    }
}
