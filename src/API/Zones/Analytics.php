<?php

/*
 * This file is part of CloudFlare PHP Client.
 *
 * (c) Brian Faust <hello@brianfaust.me>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\CloudFlare\API\Zones;

use BrianFaust\CloudFlare\API\AbstractAPI;
use BrianFaust\Http\HttpResponse;

class Analytics extends AbstractAPI
{
    public function dashboard(array $parameters): HttpResponse
    {
        return $this->client->get("zones/{$zoneIdentifier}/analytics/dashboard", $parameters);
    }

    public function colos(array $parameters): HttpResponse
    {
        return $this->client->get("zones/{$zoneIdentifier}/analytics/colos", $parameters);
    }
}
