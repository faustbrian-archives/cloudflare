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

namespace Plients\CloudFlare\API\Users;

use Plients\CloudFlare\API\AbstractAPI;
use Plients\Http\HttpResponse;

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
