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

class Plans extends AbstractApi
{
    public function available($zoneIdentifier, $parameters = [])
    {
        $this->setFormParameters($parameters);

        return $this->post("zones/$zoneIdentifier/available_plans", $parameters);
    }

    public function info($zoneIdentifier, $identifier)
    {
        $response = $this->post("zones/$zoneIdentifier/available_plans/$identifier");

        return $this->getMapper()->raw($response);
    }
}
