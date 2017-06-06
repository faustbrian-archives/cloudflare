<?php

/*
 * This file is part of CloudFlare PHP Client.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\CloudFlare\Api\App;

use BrianFaust\Unified\AbstractApi;

class Subscription extends AbstractApi
{
    public function lists($parameters = [])
    {
        $this->setQuery($parameters);

        $response = $this->get('user/billing/subscriptions/apps');

        return $this->getMapper()->raw($response);
    }

    public function info($identifier)
    {
        $response = $this->get("user/billing/subscriptions/apps/$identifier");

        return $this->getMapper()->raw($response);
    }
}
