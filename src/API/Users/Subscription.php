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

class Subscription extends AbstractAPI
{
    public function details(array $parameters = []): HttpResponse
    {
        return $this->client->get('user/subscriptions', $parameters);
    }

    public function update(array $parameters = []): HttpResponse
    {
        return $this->client->patch("user/subscriptions/{$identifier}", $parameters);
    }

    public function delete(array $parameters = []): HttpResponse
    {
        return $this->client->delete("user/subscriptions/{$identifier}", $parameters);
    }
}
