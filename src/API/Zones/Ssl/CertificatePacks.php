<?php

declare(strict_types=1);

/*
 * This file is part of CloudFlare PHP Client.
 *
 * (c) Brian Faust <hello@basecode.sh>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Plients\CloudFlare\API\Zones\Ssl;

use Plients\CloudFlare\API\AbstractAPI;
use Plients\Http\HttpResponse;

class CertificatePacks extends AbstractAPI
{
    public function list(string $zoneIdentifier, array $parameters = []): HttpResponse
    {
        return $this->client->get("zones/{$zoneIdentifier}/ssl/certificate_packs", $parameters);
    }

    public function order(string $zoneIdentifier, array $parameters = []): HttpResponse
    {
        return $this->client->post("zones/{$zoneIdentifier}/ssl/certificate_packs", $parameters);
    }

    public function update(string $zoneIdentifier, array $parameters = []): HttpResponse
    {
        return $this->client->patch("zones/{$zoneIdentifier}/ssl/certificate_packs/{$identifier}", $parameters);
    }
}
