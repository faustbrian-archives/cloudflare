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

class Invites extends AbstractAPI
{
    public function list(): HttpResponse
    {
        return $this->client->get('user/invites');
    }

    public function details(string $identifier): HttpResponse
    {
        return $this->client->get("user/invites/{$identifier}");
    }

    public function respond(string $identifier, array $parameters = []): HttpResponse
    {
        return $this->client->patch("user/invites/{$identifier}", $parameters);
    }
}
