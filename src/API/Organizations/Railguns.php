<?php

/*
 * This file is part of CloudFlare PHP Client.
 *
 * (c) Brian Faust <hello@brianfaust.me>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\CloudFlare\API\Organizations;

use BrianFaust\Http\HttpResponse;
use BrianFaust\CloudFlare\API\AbstractAPI;

class Railguns extends AbstractAPI
{
    public function create(array $parameters = []): HttpResponse
    {
        return $this->client->post("organizations/{$organizationIdentifier}/railguns", $parameters);
    }

    public function list(array $parameters = []): HttpResponse
    {
        return $this->client->get("organizations/{$organizationIdentifier}/railguns", $parameters);
    }

    public function zones(array $parameters = []): HttpResponse
    {
        return $this->client->get("organizations/{$organizationIdentifier}/railguns/{$identifier}/zones", $parameters);
    }

    public function togggle(array $parameters = []): HttpResponse
    {
        return $this->client->patch("organizations/{$organizationIdentifier}/railguns/{$identifier}", $parameters);
    }

    public function delete(array $parameters = []): HttpResponse
    {
        return $this->client->delete("organizations/{$organizationIdentifier}/railguns/{$identifier}", $parameters);
    }
}
