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

class Dns extends AbstractAPI
{
    public function create(array $parameters = []): HttpResponse
    {
        return $this->client->post("zones/{$zoneIdentifier}/dns_records", $parameters);
    }

    public function list(array $parameters = []): HttpResponse
    {
        return $this->client->get("zones/{$zoneIdentifier}/dns_records", $parameters);
    }

    public function details(array $parameters = []): HttpResponse
    {
        return $this->client->get("zones/{$zoneIdentifier}/dns_records/{$identifier}", $parameters);
    }

    public function update(array $parameters = []): HttpResponse
    {
        return $this->client->patch("zones/{$zoneIdentifier}/dns_records/{$identifier}", $parameters);
    }

    public function delete(array $parameters = []): HttpResponse
    {
        return $this->client->delete("zones/{$zoneIdentifier}/dns_records/{$identifier}", $parameters);
    }

    public function import(array $parameters = []): HttpResponse
    {
        return $this->client->post("zones/{$zoneIdentifier}/dns_records/import", $parameters);
    }
}
