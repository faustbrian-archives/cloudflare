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

class Zone extends AbstractApi
{
    public function create($parameters)
    {
        $this->setFormParameters($parameters);

        return $this->post('zones', $parameters);
    }

    public function lists($parameters = [])
    {
        $this->setQuery($parameters);

        $response = $this->get('zones', $parameters);

        return $this->getMapper()->raw($response);
    }

    public function info($identifier)
    {
        $response = $this->get("zones/$identifier");

        return $this->getMapper()->raw($response);
    }

    public function edit($identifier, $parameters)
    {
        $this->setQuery($parameters);

        return $this->patch("zones/$identifier", $parameters);
    }

    public function purge($identifier, $files = [])
    {
        $parameters = empty($files) ? ['purge_everything' => true] : compact('files');

        $this->setQuery($parameters);

        return $this->delete("zones/$identifier/purge_cache", $parameters);
    }

    public function destroy($identifier)
    {
        return $this->delete("zones/$identifier");
    }
}
