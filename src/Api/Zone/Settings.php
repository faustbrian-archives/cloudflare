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

class Settings extends AbstractApi
{
    public function all()
    {
        $response = $this->get("zones/$zoneIdentifier/settings");

        return $this->getMapper()->raw($response);
    }

    public function advancedDdos()
    {
        $response = $this->get("zones/$zoneIdentifier/settings/advanced_ddos");

        return $this->getMapper()->raw($response);
    }

    public function alwaysOnline()
    {
        $response = $this->get("zones/$zoneIdentifier/settings/always_online");

        return $this->getMapper()->raw($response);
    }

    public function browserCacheTtl()
    {
        $response = $this->get("zones/$zoneIdentifier/settings/browser_cache_ttl");

        return $this->getMapper()->raw($response);
    }

    public function browserCheck()
    {
        $response = $this->get("zones/$zoneIdentifier/settings/browser_check");

        return $this->getMapper()->raw($response);
    }

    public function cacheLevel()
    {
        $response = $this->get("zones/$zoneIdentifier/settings/cache_level");

        return $this->getMapper()->raw($response);
    }

    public function challengeTtl()
    {
        $response = $this->get("zones/$zoneIdentifier/settings/challenge_ttl");

        return $this->getMapper()->raw($response);
    }

    public function challengeTtl()
    {
        $response = $this->get("zones/$zoneIdentifier/settings/challenge_ttl");

        return $this->getMapper()->raw($response);
    }

    public function emailObfuscation()
    {
        $response = $this->get("zones/$zoneIdentifier/settings/email_obfuscation");

        return $this->getMapper()->raw($response);
    }

    public function hotlinkProtection()
    {
        $response = $this->get("zones/$zoneIdentifier/settings/hotlink_protection");

        return $this->getMapper()->raw($response);
    }

    public function ipGeolocation()
    {
        $response = $this->get("zones/$zoneIdentifier/settings/ip_geolocation");

        return $this->getMapper()->raw($response);
    }

    public function ipv6()
    {
        $response = $this->get("zones/$zoneIdentifier/settings/ipv6");

        return $this->getMapper()->raw($response);
    }

    public function minify()
    {
        $response = $this->get("zones/$zoneIdentifier/settings/minify");

        return $this->getMapper()->raw($response);
    }

    public function mobileRedirect()
    {
        $response = $this->get("zones/$zoneIdentifier/settings/mobile_redirect");

        return $this->getMapper()->raw($response);
    }

    public function mirage()
    {
        $response = $this->get("zones/$zoneIdentifier/settings/mirage");

        return $this->getMapper()->raw($response);
    }

    public function polish()
    {
        $response = $this->get("zones/$zoneIdentifier/settings/polish");

        return $this->getMapper()->raw($response);
    }

    public function rocketLoader()
    {
        $response = $this->get("zones/$zoneIdentifier/settings/rocket_loader");

        return $this->getMapper()->raw($response);
    }

    public function securityHeader()
    {
        $response = $this->get("zones/$zoneIdentifier/settings/security_header");

        return $this->getMapper()->raw($response);
    }

    public function securityLevel()
    {
        $response = $this->get("zones/$zoneIdentifier/settings/security_level");

        return $this->getMapper()->raw($response);
    }

    public function serverSideExclude()
    {
        $response = $this->get("zones/$zoneIdentifier/settings/server_side_exclude");

        return $this->getMapper()->raw($response);
    }

    public function ssl()
    {
        $response = $this->get("zones/$zoneIdentifier/settings/ssl");

        return $this->getMapper()->raw($response);
    }

    public function tlsClientAuth()
    {
        $response = $this->get("zones/$zoneIdentifier/settings/tls_client_auth");

        return $this->getMapper()->raw($response);
    }

    public function waf()
    {
        $response = $this->get("zones/$zoneIdentifier/settings/waf");

        return $this->getMapper()->raw($response);
    }

    public function updateAll($items)
    {
        return $this->patch("zones/$zoneIdentifier/settings", compact('items'));
    }

    public function updateAdvancedDdos($value)
    {
        return $this->patch("zones/$zoneIdentifier/settings/advanced_ddos", compact('value'));
    }

    public function updateAlwaysOnline($value)
    {
        return $this->patch("zones/$zoneIdentifier/settings/always_online", compact('value'));
    }

    public function updateBrowserCacheTtl($value)
    {
        return $this->patch("zones/$zoneIdentifier/settings/browser_cache_ttl", compact('value'));
    }

    public function updateBrowserCheck($value)
    {
        return $this->patch("zones/$zoneIdentifier/settings/browser_check", compact('value'));
    }

    public function updateCacheLevel($value)
    {
        return $this->patch("zones/$zoneIdentifier/settings/cache_level", compact('value'));
    }

    public function updateChallengeTtl($value)
    {
        return $this->patch("zones/$zoneIdentifier/settings/challenge_ttl", compact('value'));
    }

    public function updateChallengeTtl($value)
    {
        return $this->patch("zones/$zoneIdentifier/settings/challenge_ttl", compact('value'));
    }

    public function updateEmailObfuscation($value)
    {
        return $this->patch("zones/$zoneIdentifier/settings/email_obfuscation", compact('value'));
    }

    public function updateHotlinkProtection($value)
    {
        return $this->patch("zones/$zoneIdentifier/settings/hotlink_protection", compact('value'));
    }

    public function updateIpGeolocation($value)
    {
        return $this->patch("zones/$zoneIdentifier/settings/ip_geolocation", compact('value'));
    }

    public function updateIpv6($value)
    {
        return $this->patch("zones/$zoneIdentifier/settings/ipv6", compact('value'));
    }

    public function updateMinify($value)
    {
        return $this->patch("zones/$zoneIdentifier/settings/minify", compact('value'));
    }

    public function updateMobileRedirect($value)
    {
        return $this->patch("zones/$zoneIdentifier/settings/mobile_redirect", compact('value'));
    }

    public function updateMirage($value)
    {
        return $this->patch("zones/$zoneIdentifier/settings/mirage", compact('value'));
    }

    public function updatePolish($value)
    {
        return $this->patch("zones/$zoneIdentifier/settings/polish", compact('value'));
    }

    public function updateRocketLoader($value)
    {
        return $this->patch("zones/$zoneIdentifier/settings/rocket_loader", compact('value'));
    }

    public function updateSecurityHeader($value)
    {
        return $this->patch("zones/$zoneIdentifier/settings/security_header", compact('value'));
    }

    public function updateSecurityLevel($value)
    {
        return $this->patch("zones/$zoneIdentifier/settings/security_level", compact('value'));
    }

    public function updateServerSideExclude($value)
    {
        return $this->patch("zones/$zoneIdentifier/settings/server_side_exclude", compact('value'));
    }

    public function updateSsl($value)
    {
        return $this->patch("zones/$zoneIdentifier/settings/ssl", compact('value'));
    }

    public function updateTlsClientAuth($value)
    {
        return $this->patch("zones/$zoneIdentifier/settings/tls_client_auth", compact('value'));
    }

    public function updateWaf($value)
    {
        return $this->patch("zones/$zoneIdentifier/settings/waf", compact('value'));
    }
}
