<?php

/*
 * This file is part of CloudFlare PHP Client.
 *
 * (c) Brian Faust <hello@brianfaust.me>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\CloudFlare\API\Zones;

use BrianFaust\Http\HttpResponse;
use BrianFaust\CloudFlare\API\AbstractAPI;

class Aml extends AbstractAPI
{
    public function details(array $parameters = []): HttpResponse
    {
        return $this->client->get("zones/{$zoneIdentifier}/amp/viewer", $parameters);
    }

    public function update(array $parameters = []): HttpResponse
    {
        return $this->client->patch("zones/{$zoneIdentifier}/amp/viewer", $parameters);
    }
}
