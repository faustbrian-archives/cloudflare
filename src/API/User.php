<?php

/*
 * This file is part of CloudFlare PHP Client.
 *
 * (c) Brian Faust <hello@brianfaust.me>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\CloudFlare\API;

use BrianFaust\Http\HttpResponse;

class User extends AbstractAPI
{
    public function details(array $parameters): HttpResponse
    {
        return $this->client->get('user', $parameters);
    }

    public function update(array $parameters): HttpResponse
    {
        return $this->client->patch('user', $parameters);
    }

    public function billingProfile(array $parameters): HttpResponse
    {
        return $this->client->get('user/billing/profile', $parameters);
    }

    public function billingHistory(array $parameters): HttpResponse
    {
        return $this->client->get('user/billing/history', $parameters);
    }
}