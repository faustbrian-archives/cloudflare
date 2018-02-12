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

namespace BrianFaust\CloudFlare\API\Organizations\LoadBalancers;

use BrianFaust\CloudFlare\API\AbstractAPI;
use BrianFaust\Http\HttpResponse;

class Monitors extends AbstractAPI
{
    public function list(string $organizationIdentifier): HttpResponse
    {
        return $this->client->get("organizations/{$organizationIdentifier}/load_balancers/monitors");
    }

    public function create(string $organizationIdentifier, array $parameters = []): HttpResponse
    {
        return $this->client->post("organizations/{$organizationIdentifier}/load_balancers/monitors", $parameters);
    }

    public function details(string $organizationIdentifier, string $identifier): HttpResponse
    {
        return $this->client->get("organizations/{$organizationIdentifier}/load_balancers/monitors/{$identifier}");
    }

    public function delete(string $organizationIdentifier, string $identifier): HttpResponse
    {
        return $this->client->delete("organizations/{$organizationIdentifier}/load_balancers/monitors/{$identifier}");
    }

    public function update(string $organizationIdentifier, string $identifier, array $parameters = []): HttpResponse
    {
        return $this->client->get("organizations/{$organizationIdentifier}/load_balancers/monitors/{$identifier}", $parameters);
    }
}
