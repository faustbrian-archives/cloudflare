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

class Railguns extends AbstractAPI
{
    public function create(array $parameters = []): HttpResponse
    {
        return $this->client->post('railguns', $parameters);
    }

    public function list(array $parameters = []): HttpResponse
    {
        return $this->client->get('railguns', $parameters);
    }

    public function details(string $identifier): HttpResponse
    {
        return $this->client->get("railguns/{$identifier}");
    }

    public function zones(string $identifier): HttpResponse
    {
        return $this->client->get("railguns/{$identifier}/zones");
    }

    public function enabled(string $identifier): HttpResponse
    {
        return $this->client->patch("railguns/{$identifier}", ['enabled' => true]);
    }

    public function disable(string $identifier): HttpResponse
    {
        return $this->client->patch("railguns/{$identifier}", ['enabled' => false]);
    }

    public function delete(string $identifier): HttpResponse
    {
        return $this->client->delete("railguns/{$identifier}");
    }
}
