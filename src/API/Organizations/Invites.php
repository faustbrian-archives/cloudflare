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

namespace BrianFaust\CloudFlare\API\Users;

use BrianFaust\Http\HttpResponse;
use BrianFaust\CloudFlare\API\AbstractAPI;

class Invites extends AbstractAPI
{
    public function create(string $organizationIdentifier, array $parameters = []): HttpResponse
    {
        return $this->client->post("organizations/{$organizationIdentifier}/invites", $parameters);
    }

    public function list(string $organizationIdentifier): HttpResponse
    {
        return $this->client->get("organizations/{$organizationIdentifier}/invites");
    }

    public function details(string $organizationIdentifier, string $identifier): HttpResponse
    {
        return $this->client->get("organizations/{$organizationIdentifier}/invites/{$identifier}");
    }

    public function update(string $organizationIdentifier, string $identifier, array $parameters = []): HttpResponse
    {
        return $this->client->patch("organizations/{$organizationIdentifier}/invites/{$identifier}", $parameters);
    }

    public function cancel(string $organizationIdentifier, string $identifier, array $parameters = []): HttpResponse
    {
        return $this->client->delete("organizations/{$organizationIdentifier}/invites/{$identifier}", $parameters);
    }
}
