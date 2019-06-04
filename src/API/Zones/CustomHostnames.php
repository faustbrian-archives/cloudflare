<?php

declare(strict_types=1);

/*
 * This file is part of CloudFlare PHP Client.
 *
 * (c) Brian Faust <hello@basecode.sh>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Plients\CloudFlare\API\Zones;

use Plients\CloudFlare\API\AbstractAPI;
use Plients\Http\HttpResponse;

class CustomHostnames extends AbstractAPI
{
    public function list(string $zoneIdentifier, array $parameters = []): HttpResponse
    {
        return $this->client->get("zones/{$zoneIdentifier}/custom_hostnames", $parameters);
    }

    public function create(string $zoneIdentifier, array $parameters = []): HttpResponse
    {
        return $this->client->post("zones/{$zoneIdentifier}/custom_hostnames", $parameters);
    }

    public function details(string $zoneIdentifier, string $identifier): HttpResponse
    {
        return $this->client->get("zones/{$zoneIdentifier}/custom_hostnames/{$identifier}");
    }

    public function update(string $zoneIdentifier, string $identifier, array $parameters = []): HttpResponse
    {
        return $this->client->patch("zones/{$zoneIdentifier}/custom_hostnames/{$identifier}", $parameters);
    }

    public function delete(string $zoneIdentifier, string $identifier): HttpResponse
    {
        return $this->client->delete("zones/{$zoneIdentifier}/custom_hostnames/{$identifier}");
    }
}
