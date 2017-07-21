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

class LoadBalancers extends AbstractAPI
{
    public function list(array $parameters = []): HttpResponse
    {
        return $this->client->get("zones/{$identifier}/load_balancers", $parameters);
    }

    public function create(array $parameters = []): HttpResponse
    {
        return $this->client->post("zones/{$identifier}/load_balancers", $parameters);
    }

    public function details(array $parameters = []): HttpResponse
    {
        return $this->client->get("zones/{$identifier}/load_balancers/{$identifier}", $parameters);
    }

    public function delete(array $parameters = []): HttpResponse
    {
        return $this->client->delete("zones/{$identifier}/load_balancers/{$identifier}", $parameters);
    }

    public function update(array $parameters = []): HttpResponse
    {
        return $this->client->patch("zones/{$identifier}/load_balancers/{$identifier}", $parameters);
    }
}
