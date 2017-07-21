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

class Railgun extends AbstractAPI
{
    public function list(array $parameters = []): HttpResponse
    {
        return $this->client->get("zones/{$zoneIdentifier}/railguns", $parameters);
    }

    public function details(array $parameters = []): HttpResponse
    {
        return $this->client->get("zones/{$zoneIdentifier}/railguns/{$identifier}", $parameters);
    }

    public function diagnose(array $parameters = []): HttpResponse
    {
        return $this->client->get("zones/{$zoneIdentifier}/railguns/{$identifier}/diagnose", $parameters);
    }

    public function toggle(array $parameters = []): HttpResponse
    {
        return $this->client->patch("zones/{$zoneIdentifier}/railguns/{$identifier}", $parameters);
    }
}
