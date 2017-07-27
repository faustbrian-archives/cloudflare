<?php

/*
 * This file is part of CloudFlare PHP Client.
 *
 * (c) Brian Faust <hello@brianfaust.me>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\CloudFlare\API\Users;

use BrianFaust\Http\HttpResponse;
use BrianFaust\CloudFlare\API\AbstractAPI;

class Organizations extends AbstractAPI
{
    public function list(array $parameters = []): HttpResponse
    {
        return $this->client->get('user/organizations', $parameters);
    }

    public function details(string $identifier): HttpResponse
    {
        return $this->client->get("user/organizations/{$identifier}");
    }

    public function delete(string $identifier): HttpResponse
    {
        return $this->client->delete("user/organizations/{$identifier}");
    }
}
