<?php

/*
 * This file is part of CloudFlare PHP Client.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\CloudFlare\Api;

use BrianFaust\Unified\AbstractApi;
use BrianFaust\CloudFlare\Models\Zone as ZoneModel;

class Railgun extends AbstractApi
{
    public function create($name)
    {
        return $this->post('railguns', compact('name'));
    }

    public function lists($parameters = [])
    {
        $this->setQuery($parameters);

        $response = $this->get('railguns', $parameters);

        return $this->getMapper()->raw($response);
    }

    public function info($identifier)
    {
        $response = $this->get("railguns/$identifier");

        return $this->getMapper()->raw($response);
    }

    public function zones($identifier)
    {
        $response = $this->get("railguns/$identifier/zones");

        return $this->getMapper()->raw($response['result'], ZoneModel::class);
    }

    public function enable($identifier)
    {
        return $this->patch("railguns/$identifier", ['enabled' => true]);
    }

    public function disable($identifier)
    {
        return $this->patch("railguns/$identifier", ['enabled' => false]);
    }

    public function destroy($identifier)
    {
        return $this->delete("railguns/$identifier");
    }
}
