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

namespace Plients\CloudFlare\API\Organizations\Firewall;

use Plients\CloudFlare\API\AbstractAPI;
use Plients\Http\HttpResponse;

class AccessRules extends AbstractAPI
{
    public function list(string $organizationIdentifier, array $parameters = []): HttpResponse
    {
        return $this->client->get("organizations/{$organizationIdentifier}/firewall/access_rules/rules", $parameters);
    }

    public function create(string $organizationIdentifier, array $parameters = []): HttpResponse
    {
        return $this->client->post("organizations/{$organizationIdentifier}/firewall/access_rules/rules", $parameters);
    }

    public function update(string $organizationIdentifier, string $identifier, array $parameters = []): HttpResponse
    {
        return $this->client->patch("organizations/{$organizationIdentifier}/firewall/access_rules/rules/{$identifier}", $parameters);
    }

    public function delete(string $organizationIdentifier, string $identifier): HttpResponse
    {
        return $this->client->delete("organizations/{$organizationIdentifier}/firewall/access_rules/rules/{$identifier}");
    }
}
