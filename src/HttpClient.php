<?php

/*
 * This file is part of CloudFlare PHP Client.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\CloudFlare;

use BrianFaust\Unified\AbstractHttpClient;
use BrianFaust\CloudFlare\Request\Modifiers\AuthenticationModifier;

class HttpClient extends AbstractHttpClient
{
    protected $options = [
        'base_uri' => 'https://api.cloudflare.com/client/v4/',
        'headers' => [
           'User-Agent' => 'BrianFaust/CloudFlare',
        ],
    ];

    protected $requestModifiers = [AuthenticationModifier::class];
}
