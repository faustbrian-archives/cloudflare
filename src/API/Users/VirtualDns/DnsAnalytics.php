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

namespace Plients\CloudFlare\API\Users\VirtualDns;

use Plients\CloudFlare\API\AbstractAPI;
use Plients\Http\HttpResponse;

class DnsAnalytics extends AbstractAPI
{
    public function list(string $identifier, array $parameters = []): HttpResponse
    {
        return $this->client->post("user/virtual_dns/{$identifier}/dns_analytics/report", $parameters);
    }

    public function listByTime(string $identifier, array $parameters = []): HttpResponse
    {
        return $this->client->post("user/virtual_dns/{$identifier}/dns_analytics/report/bytime", $parameters);
    }
}
