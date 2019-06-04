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

namespace Plients\CloudFlare\API;

use Plients\Http\HttpResponse;

class Ips extends AbstractAPI
{
    public function list(): HttpResponse
    {
        return $this->client->get('ips');
    }
}
