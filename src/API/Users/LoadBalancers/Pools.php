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

namespace Plients\CloudFlare\API\Users\LoadBalancers;

use Plients\CloudFlare\API\AbstractAPI;
use Plients\Http\HttpResponse;

class Pools extends AbstractAPI
{
    public function list(): HttpResponse
    {
        return $this->client->get('user/load_balancers/pools');
    }

    public function create(array $parameters = []): HttpResponse
    {
        return $this->client->post('user/load_balancers/pools', $parameters);
    }

    public function details(string $identifier): HttpResponse
    {
        return $this->client->get("user/load_balancers/pools/{$identifier}");
    }

    public function delete(string $identifier): HttpResponse
    {
        return $this->client->delete("user/load_balancers/pools/{$identifier}");
    }

    public function update(string $identifier, array $parameters = []): HttpResponse
    {
        return $this->client->get("user/load_balancers/pools/{$identifier}", $parameters);
    }
}
