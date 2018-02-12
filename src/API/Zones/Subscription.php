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

namespace BrianFaust\CloudFlare\API\Zones;

use BrianFaust\CloudFlare\API\AbstractAPI;
use BrianFaust\Http\HttpResponse;

class Subscription extends AbstractAPI
{
    public function details(string $zoneIdentifier): HttpResponse
    {
        return $this->client->get("zones/{$zoneIdentifier}/subscription");
    }

    public function create(string $zoneIdentifier, array $parameters = []): HttpResponse
    {
        return $this->client->post("zones/{$zoneIdentifier}/subscription", $parameters);
    }

    public function update(string $zoneIdentifier, array $parameters = []): HttpResponse
    {
        return $this->client->patch("zones/{$zoneIdentifier}/subscription", $parameters);
    }
}
