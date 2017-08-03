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

use BrianFaust\Http\HttpResponse;
use BrianFaust\CloudFlare\API\AbstractAPI;

class KeylessCertificates extends AbstractAPI
{
    public function list(string $zoneIdentifier): HttpResponse
    {
        return $this->client->get("zones/{$zoneIdentifier}/keyless_certificates");
    }

    public function create(string $zoneIdentifier, array $parameters = []): HttpResponse
    {
        return $this->client->post("zones/{$zoneIdentifier}/keyless_certificates", $parameters);
    }

    public function details(string $zoneIdentifier, string $identifier): HttpResponse
    {
        return $this->client->get("zones/{$zoneIdentifier}/keyless_certificates/{$identifier}");
    }

    public function update(string $zoneIdentifier, string $identifier, array $parameters = []): HttpResponse
    {
        return $this->client->patch("zones/{$zoneIdentifier}/keyless_certificates/{$identifier}", $parameters);
    }

    public function delete(string $zoneIdentifier, string $identifier): HttpResponse
    {
        return $this->client->delete("zones/{$zoneIdentifier}/keyless_certificates/{$identifier}");
    }
}
