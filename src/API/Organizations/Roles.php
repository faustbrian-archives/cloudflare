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

class Roles extends AbstractAPI
{
    public function list(array $parameters = []): HttpResponse
    {
        return $this->client->get("organizations/{$organizationIdentifier}/roles", $parameters);
    }

    public function details(array $parameters = []): HttpResponse
    {
        return $this->client->patch("organizations/{$organizationIdentifier}/roles/{$identifier}", $parameters);
    }
}
