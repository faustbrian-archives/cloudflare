<?php

/*
 * This file is part of CloudFlare PHP Client.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\CloudFlare\Api\Zone\SSL;

use BrianFaust\Unified\AbstractApi;

class Custom extends AbstractApi
{
    public function create($zoneIdentifier, $parameters = [])
    {
        $this->setFormParameters($parameters);

        return $this->post("zones/$zoneIdentifier/custom_certificates");
    }

    public function lists($zoneIdentifier, $parameters = [])
    {
        $this->setQuery($parameters);

        $response = $this->get("zones/$zoneIdentifier/custom_certificates");

        return $this->getMapper()->raw($response);
    }

    public function info($zoneIdentifier, $identifier)
    {
        $this->setQuery($parameters);

        $response = $this->get("zones/$zoneIdentifier/custom_certificates/$identifier");

        return $this->getMapper()->raw($response);
    }

    public function edit($zoneIdentifier, $identifier, $parameters = [])
    {
        $this->setQuery($parameters);

        return $this->patch("zones/$zoneIdentifier/custom_certificates/$identifier");
    }

    public function prioritize($zoneIdentifier, $identifier, $parameters = [])
    {
        $this->setQuery($parameters);

        return $this->patch("zones/$zoneIdentifier/custom_certificates/prioritize");
    }

    public function destroy($zoneIdentifier, $identifier)
    {
        return $this->delete("zones/$zoneIdentifier/custom_certificates/$identifier");
    }
}
