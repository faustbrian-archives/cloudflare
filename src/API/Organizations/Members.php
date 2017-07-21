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

use BrianFaust\CloudFlare\API\AbstractAPI;
use BrianFaust\Http\HttpResponse;

class Members extends AbstractAPI
{
    public function create(array $parameters = []): HttpResponse
    {
        return $this->client->post("organizations/{$organizationIdentifier}/members", $parameters);
    }

    public function list(array $parameters = []): HttpResponse
    {
        return $this->client->get("organizations/{$organizationIdentifier}/members", $parameters);
    }

    public function update(array $parameters = []): HttpResponse
    {
        return $this->client->patch("organizations/{$organizationIdentifier}/members/{$identifier}", $parameters);
    }

    public function delete(array $parameters = []): HttpResponse
    {
        return $this->client->delete("organizations/{$organizationIdentifier}/members/{$identifier}", $parameters);
    }
}
