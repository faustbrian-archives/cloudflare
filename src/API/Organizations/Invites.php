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

use BrianFaust\CloudFlare\API\AbstractAPI;
use BrianFaust\Http\HttpResponse;

class Invites extends AbstractAPI
{
    public function create(array $parameters): HttpResponse
    {
        return $this->client->post("organizations/{$organizationIdentifier}/invites", $parameters);
    }

    public function list(array $parameters): HttpResponse
    {
        return $this->client->get("organizations/{$organizationIdentifier}/invites", $parameters);
    }

    public function details(array $parameters): HttpResponse
    {
        return $this->client->get("organizations/{$organizationIdentifier}/invites/{$identifier}", $parameters);
    }

    public function update(array $parameters): HttpResponse
    {
        return $this->client->patch("organizations/{$organizationIdentifier}/invites/{$identifier}", $parameters);
    }

    public function cancel(array $parameters): HttpResponse
    {
        return $this->client->delete("organizations/{$organizationIdentifier}/invites/{$identifier}", $parameters);
    }
}
