<?php

declare(strict_types=1);

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
    public function create(string $zoneIdentifier, array $parameters = []): HttpResponse
    {
        return $this->client->post("zones/{$zoneIdentifier}/dns_records", $parameters);
    }

    public function list(string $zoneIdentifier, array $parameters = []): HttpResponse
    {
        return $this->client->get("zones/{$zoneIdentifier}/dns_records", $parameters);
    }

    public function details(string $zoneIdentifier, string $identifier): HttpResponse
    {
        return $this->client->get("zones/{$zoneIdentifier}/dns_records/{$identifier}");
    }

    public function update(string $zoneIdentifier, string $identifier, array $parameters = []): HttpResponse
    {
        return $this->client->patch("zones/{$zoneIdentifier}/dns_records/{$identifier}", $parameters);
    }

    public function delete(string $zoneIdentifier, string $identifier): HttpResponse
    {
        return $this->client->delete("zones/{$zoneIdentifier}/dns_records/{$identifier}");
    }

    public function import(string $zoneIdentifier, array $parameters = []): HttpResponse
    {
        return $this->client->post("zones/{$zoneIdentifier}/dns_records/import", $parameters);
    }
}
