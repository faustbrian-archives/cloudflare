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

namespace Plients\CloudFlare\API\Organizations;

use Plients\CloudFlare\API\AbstractAPI;
use Plients\Http\HttpResponse;

class Roles extends AbstractAPI
{
    public function list(string $organizationIdentifier): HttpResponse
    {
        return $this->client->get("organizations/{$organizationIdentifier}/roles");
    }

    public function details(string $organizationIdentifier, string $identifier): HttpResponse
    {
        return $this->client->patch("organizations/{$organizationIdentifier}/roles/{$identifier}");
    }
}
