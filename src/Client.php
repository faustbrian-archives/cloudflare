<?php

/*
 * This file is part of CloudFlare PHP Client.
 *
 * (c) Brian Faust <hello@brianfaust.me>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\CloudFlare;

use BrianFaust\Http\Http;

class Client
{
    /**
     * @var string
     */
    private $key;

    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $userServiceKey;

    /**
     * Create a new client instance.
     *
     * @param string $key
     * @param string $email
     * @param string $userServiceKey
     */
    public function __construct(string $key, string $email, ?string $userServiceKey = null)
    {
        $this->key = $key;
        $this->email = $email;
        $this->userServiceKey = $userServiceKey;
    }

    /**
     * Create a new API service instance.
     *
     * @param string $name
     *
     * @return \BrianFaust\CloudFlare\API\AbstractAPI
     */
    public function api(string $name): API\AbstractAPI
    {
        $client = Http::withBaseUri('https://api.cloudflare.com/client/v4/')->withHeaders($this->buildAuthHeaders());

        $class = "BrianFaust\\CloudFlare\\API\\{$name}";

        return new $class($client);
    }

    /**
     * @return array
     */
    private function buildAuthHeaders(): array
    {
        if ($this->userServiceKey) {
            return ['X-Auth-User-Service-Key' => $this->userServiceKey];
        }

        return ['X-Auth-Key' => $this->key, 'X-Auth-Email' => $this->email];
    }
}
