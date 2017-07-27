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

use BrianFaust\Http\HttpResponse;
use BrianFaust\CloudFlare\API\AbstractAPI;

class Railgun extends AbstractAPI
{
    public function list(string $zoneIdentifier): HttpResponse
    {
        return $this->client->get("zones/{$zoneIdentifier}/railguns");
    }

    public function details(string $zoneIdentifier, string $identifier): HttpResponse
    {
        return $this->client->get("zones/{$zoneIdentifier}/railguns/{$identifier}");
    }

    public function diagnose(string $zoneIdentifier, string $identifier): HttpResponse
    {
        return $this->client->get("zones/{$zoneIdentifier}/railguns/{$identifier}/diagnose");
    }

    public function connect(string $zoneIdentifier, string $identifier): HttpResponse
    {
        return $this->client->patch("zones/{$zoneIdentifier}/railguns/{$identifier}", ['connected' => true]);
    }

    public function disconnect(string $zoneIdentifier, string $identifier): HttpResponse
    {
        return $this->client->patch("zones/{$zoneIdentifier}/railguns/{$identifier}", ['connected' => false]);
    }
}
