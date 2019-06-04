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

namespace Plients\CloudFlare\API\Users;

use Plients\CloudFlare\API\AbstractAPI;
use Plients\Http\HttpResponse;

class Subscription extends AbstractAPI
{
    public function details(): HttpResponse
    {
        return $this->client->get('user/subscriptions');
    }

    public function update(string $identifier, array $parameters = []): HttpResponse
    {
        return $this->client->patch("user/subscriptions/{$identifier}", $parameters);
    }

    public function delete(string $identifeir): HttpResponse
    {
        return $this->client->delete("user/subscriptions/{$identifier}", $parameters);
    }
}
