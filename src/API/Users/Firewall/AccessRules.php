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

namespace Plients\CloudFlare\API\Users\Firewall;

use Plients\CloudFlare\API\AbstractAPI;
use Plients\Http\HttpResponse;

class AccessRules extends AbstractAPI
{
    public function list(array $parameters = []): HttpResponse
    {
        return $this->client->get('user/firewall/access_rules/rules', $parameters);
    }

    public function create(array $parameters = []): HttpResponse
    {
        return $this->client->post('user/firewall/access_rules/rules', $parameters);
    }

    public function update(array $parameters = []): HttpResponse
    {
        return $this->client->patch("user/firewall/access_rules/rules/{$identifier}", $parameters);
    }

    public function delete(): HttpResponse
    {
        return $this->client->delete("user/firewall/access_rules/rules/{$identifier}");
    }
}
