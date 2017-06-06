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

class Railguns extends AbstractApi
{
    public function available($zoneIdentifier)
    {
        return $this->get("zones/$zoneIdentifier/railguns");
    }

    public function info($zoneIdentifier, $identifier)
    {
        $response = $this->get("zones/$zoneIdentifier/railguns/$identifier");

        return $this->getMapper()->raw($response);
    }

    public function test($zoneIdentifier, $identifier)
    {
        return $this->get("zones/$zoneIdentifier/railguns/$identifier/diagnose");
    }

    public function connect($zoneIdentifier, $identifier)
    {
        $this->setQuery(['connected' => true]);

        return $this->get("zones/$zoneIdentifier/railguns/$identifier/diagnose");
    }

    public function disconnect($zoneIdentifier, $identifier)
    {
        $this->setQuery(['connected' => false]);

        return $this->get("zones/$zoneIdentifier/railguns/$identifier/diagnose");
    }
}
