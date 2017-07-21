<?php

/*
 * This file is part of CloudFlare PHP Client.
 *
 * (c) Brian Faust <hello@brianfaust.me>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\CloudFlare\API\Zones\Firewall;

use BrianFaust\CloudFlare\API\AbstractAPI;
use BrianFaust\Http\HttpResponse;

class WafRules extends AbstractAPI
{
    public function list(array $parameters): HttpResponse
    {
        return $this->client->get("zones/{$zoneIdentifier}/firewall/waf/packages/{$packageIdentifier}/rules", $parameters);
    }

    public function details(array $parameters): HttpResponse
    {
        return $this->client->get("zones/{$zoneIdentifier}/firewall/waf/packages/{$packageIdentifier}/rules/{$identifier}", $parameters);
    }

    public function update(array $parameters): HttpResponse
    {
        return $this->client->patch("zones/{$zoneIdentifier}/firewall/waf/packages/{$packageIdentifier}/rules/{$identifier}", $parameters);
    }
}