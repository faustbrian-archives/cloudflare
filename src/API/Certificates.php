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

namespace BrianFaust\CloudFlare\API;

use BrianFaust\Http\HttpResponse;

class Certificates extends AbstractAPI
{
    public function list(array $parameters = []): HttpResponse
    {
        return $this->client->get('certificates', $parameters);
    }

    public function create(array $parameters = []): HttpResponse
    {
        return $this->client->post('certificates', $parameters);
    }

    public function details(string $identifier): HttpResponse
    {
        return $this->client->get("certificates/{$identifier}");
    }

    public function revoke(string $identifier, array $parameters = []): HttpResponse
    {
        return $this->client->delete("certificates/{$identifier}", $parameters);
    }
}
