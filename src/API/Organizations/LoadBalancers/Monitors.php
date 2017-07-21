<?php

/*
 * This file is part of CloudFlare PHP Client.
 *
 * (c) Brian Faust <hello@brianfaust.me>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\CloudFlare\API\Organizations\LoadBalancers;

use BrianFaust\CloudFlare\API\AbstractAPI;
use BrianFaust\Http\HttpResponse;

class Monitors extends AbstractAPI
{
    public function list(array $parameters = []): HttpResponse
    {
        return $this->client->get("organizations/{$organizationIdentifier}/load_balancers/monitors", $parameters);
    }

    public function create(array $parameters = []): HttpResponse
    {
        return $this->client->post("organizations/{$organizationIdentifier}/load_balancers/monitors", $parameters);
    }

    public function details(array $parameters = []): HttpResponse
    {
        return $this->client->get("organizations/{$organizationIdentifier}/load_balancers/monitors/{$identifier}", $parameters);
    }

    public function delete(array $parameters = []): HttpResponse
    {
        return $this->client->delete("organizations/{$organizationIdentifier}/load_balancers/monitors/{$identifier}", $parameters);
    }

    public function update(array $parameters = []): HttpResponse
    {
        return $this->client->get("organizations/{$organizationIdentifier}/load_balancers/monitors/{$identifier}", $parameters);
    }
}
