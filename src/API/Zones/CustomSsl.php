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

class CustomSsl extends AbstractAPI
{
    public function list(array $parameters = []): HttpResponse
    {
        return $this->client->get("zones/{$zoneIdentifier}/custom_certificates", $parameters);
    }

    public function create(array $parameters = []): HttpResponse
    {
        return $this->client->post("zones/{$zoneIdentifier}/custom_certificates", $parameters);
    }

    public function details(array $parameters = []): HttpResponse
    {
        return $this->client->get("zones/{$zoneIdentifier}/custom_certificates/{$identifier}", $parameters);
    }

    public function update(array $parameters = []): HttpResponse
    {
        return $this->client->patch("zones/{$zoneIdentifier}/custom_certificates/{$identifier}", $parameters);
    }

    public function prioritize(array $parameters = []): HttpResponse
    {
        return $this->client->put("zones/{$zoneIdentifier}/custom_certificates/prioritize", $parameters);
    }

    public function delete(array $parameters = []): HttpResponse
    {
        return $this->client->delete("zones/{$zoneIdentifier}/custom_certificates/{$identifier}", $parameters);
    }
}
