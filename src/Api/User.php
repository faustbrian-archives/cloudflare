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

class User extends AbstractApi
{
    public function info()
    {
        $response = $this->get('user');

        return $this->getMapper()->raw($response);
    }

    public function edit($parameters)
    {
        return $this->patch('user', $parameters);
    }
}
