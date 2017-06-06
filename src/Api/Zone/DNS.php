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

class DNS extends AbstractApi
{
    public function create($zoneIdentifier, $parameters = [])
    {
        $this->setFormParameters($parameters);

        return $this->post("zones/$zoneIdentifier/dns_records");
    }

    public function lists($zoneIdentifier, $parameters = [])
    {
        $this->setQuery($parameters);

        $response = $this->get("zones/$zoneIdentifier/dns_records");

        return $this->getMapper()->raw($response);
    }

    public function info($zoneIdentifier, $identifier)
    {
        $response = $this->get("zones/$zoneIdentifier/dns_records/$identifier");

        return $this->getMapper()->raw($response);
    }

    public function edit($zoneIdentifier, $identifier, $parameters = [])
    {
        $this->setQuery($parameters);

        return $this->patch("zones/$zoneIdentifier/dns_records/$identifier");
    }

    public function destroy($zoneIdentifier, $identifier)
    {
        return $this->delete("zones/$zoneIdentifier/dns_records/$identifier");
    }
}
