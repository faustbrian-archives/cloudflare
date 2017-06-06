<?php

/*
 * This file is part of CloudFlare PHP Client.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\CloudFlare\Api\Zone;

use BrianFaust\Unified\AbstractApi;

class Subscriptions extends AbstractApi
{
    public function lists($parameters = [])
    {
        $this->setQuery($parameters);

        $response = $this->get('user/billing/subscriptions/zones');

        return $this->getMapper()->raw($response);
    }

    public function info($identifier)
    {
        $response = $this->get("user/billing/subscriptions/zones/$identifier");

        return $this->getMapper()->raw($response);
    }
}
