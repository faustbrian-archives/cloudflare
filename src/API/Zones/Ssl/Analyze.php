<?php

/*
 * This file is part of CloudFlare PHP Client.
 *
 * (c) Brian Faust <hello@brianfaust.me>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\CloudFlare\API\Zones\Ssl;

use BrianFaust\CloudFlare\API\AbstractAPI;
use BrianFaust\Http\HttpResponse;

class Analyze extends AbstractAPI
{
    public function details(array $parameters): HttpResponse
    {
        return $this->client->post("zones/{$identifier}/ssl/analyze", $parameters);
    }
}
