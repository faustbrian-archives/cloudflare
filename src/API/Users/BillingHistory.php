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

use Plients\Http\HttpResponse;

class BillingHistory extends AbstractAPI
{
    public function details(): HttpResponse
    {
        return $this->client->get('user/billing/history');
    }
}
