<?php

/*
 * This file is part of CloudFlare PHP Client.
 *
 * (c) Brian Faust <hello@brianfaust.me>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\CloudFlare\API;

use BrianFaust\Http\HttpResponse;

class Zone extends AbstractAPI
{
    public function create(array $parameters = []): HttpResponse
    {
        return $this->client->post('zones', $parameters);
    }

    public function activationCheck(string $zoneIdentifier): HttpResponse
    {
        return $this->client->put("zones/{$identifier}/activation_check");
    }

    public function list(array $parameters = []): HttpResponse
    {
        return $this->client->get('zones', $parameters);
    }

    public function details(): HttpResponse
    {
        return $this->client->get("zones/{$identifier}");
    }

    public function update(string $identifier, array $parameters = []): HttpResponse
    {
        return $this->client->patch("zones/{$identifier}", $parameters);
    }

    public function purgeCache(string $identifier, array $parameters = []): HttpResponse
    {
        return $this->client->delete("zones/{$identifier}/purge_cache", $parameters);
    }

    public function purgeIndividualFiles(string $identifier, array $parameters = []): HttpResponse
    {
        return $this->client->delete("zones/{$identifier}/purge_cache", $parameters);
    }

    public function delete(string $identifier): HttpResponse
    {
        return $this->client->delete("zones/{$identifier}");
    }
}
