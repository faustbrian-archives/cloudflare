<?php

/*
 * This file is part of CloudFlare PHP Client.
 *
 * (c) Brian Faust <hello@brianfaust.me>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\CloudFlare\API\Organizations\VirtualDns;

use BrianFaust\Http\HttpResponse;
use BrianFaust\CloudFlare\API\AbstractAPI;

class DnsAnalytics extends AbstractAPI
{
    public function list(string $organizationIdentifier, string $identifier, array $parameters = []): HttpResponse
    {
        return $this->client->post("organizations/{$organizationIdentifier}/virtual_dns/{$identifier}/dns_analytics/report", $parameters);
    }

    public function listByTime(string $organizationIdentifier, string $identifier, array $parameters = []): HttpResponse
    {
        return $this->client->post("organizations/{$organizationIdentifier}/virtual_dns/{$identifier}/dns_analytics/report/bytime", $parameters);
    }
}
