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

    public function activationCheck(array $parameters = []): HttpResponse
    {
        return $this->client->put("zones/{$identifier}/activation_check", $parameters);
    }

    public function list(array $parameters = []): HttpResponse
    {
        return $this->client->get('zones', $parameters);
    }

    public function details(array $parameters = []): HttpResponse
    {
        return $this->client->get("zones/{$identifier}", $parameters);
    }

    public function update(array $parameters = []): HttpResponse
    {
        return $this->client->patch("zones/{$identifier}", $parameters);
    }

    public function purgeCache(array $parameters = []): HttpResponse
    {
        return $this->client->delete("zones/{$identifier}/purge_cache", $parameters);
    }

    public function purgeIndividualFiles(array $parameters = []): HttpResponse
    {
        return $this->client->delete("zones/{$identifier}/purge_cache", $parameters);
    }

    public function delete(array $parameters = []): HttpResponse
    {
        return $this->client->delete("zones/{$identifier}", $parameters);
    }

    public function availableRatePlans(array $parameters = []): HttpResponse
    {
        return $this->client->get("zones/{$zoneIdentifier}/available_rate_plans", $parameters);
    }
}
