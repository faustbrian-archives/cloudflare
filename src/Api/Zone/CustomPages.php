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

class CustomPages extends AbstractApi
{
    public function available($zoneIdentifier, $parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get("zones/$zoneIdentifier/custom_pages");
    }

    public function info($zoneIdentifier, $identifier)
    {
        $response = $this->get("zones/$zoneIdentifier/custom_pages/$identifier");

        return $this->getMapper()->raw($response);
    }

    public function edit($zoneIdentifier, $identifier, $parameters = [])
    {
        $this->setQuery($parameters);

        return $this->put("zones/$zoneIdentifier/custom_pages/$identifier");
    }
}
