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

namespace Plients\CloudFlare\API\Zones;

use Plients\CloudFlare\API\AbstractAPI;
use Plients\Http\HttpResponse;

class Settings extends AbstractAPI
{
    public function getAllZone(string $zoneIdentifier): HttpResponse
    {
        return $this->client->get("zones/{$zoneIdentifier}/settings");
    }

    public function getAdvancedDDOS(string $zoneIdentifier): HttpResponse
    {
        return $this->client->get("zones/{$zoneIdentifier}/settings/advanced_ddos");
    }

    public function getAlwaysOnline(string $zoneIdentifier): HttpResponse
    {
        return $this->client->get("zones/{$zoneIdentifier}/settings/always_online");
    }

    public function getAlwaysUseHTTPS(string $zoneIdentifier): HttpResponse
    {
        return $this->client->get("zones/{$zoneIdentifier}/settings/always_use_https");
    }

    public function getAutomaticHTTPSRewrites(string $zoneIdentifier): HttpResponse
    {
        return $this->client->get("zones/{$zoneIdentifier}/settings/automatic_https_rewrites");
    }

    public function getBrowserCacheTTL(string $zoneIdentifier): HttpResponse
    {
        return $this->client->get("zones/{$zoneIdentifier}/settings/browser_cache_ttl");
    }

    public function getBrowserCheck(string $zoneIdentifier): HttpResponse
    {
        return $this->client->get("zones/{$zoneIdentifier}/settings/browser_check");
    }

    public function getCacheLevel(string $zoneIdentifier): HttpResponse
    {
        return $this->client->get("zones/{$zoneIdentifier}/settings/cache_level");
    }

    public function getChallengeTTL(string $zoneIdentifier): HttpResponse
    {
        return $this->client->get("zones/{$zoneIdentifier}/settings/challenge_ttl");
    }

    public function getDevelopmentMode(string $zoneIdentifier): HttpResponse
    {
        return $this->client->get("zones/{$zoneIdentifier}/settings/development_mode");
    }

    public function getEmailObfuscation(string $zoneIdentifier): HttpResponse
    {
        return $this->client->get("zones/{$zoneIdentifier}/settings/email_obfuscation");
    }

    public function getHotlinkProtection(string $zoneIdentifier): HttpResponse
    {
        return $this->client->get("zones/{$zoneIdentifier}/settings/hotlink_protection");
    }

    public function getIPGeolocation(string $zoneIdentifier): HttpResponse
    {
        return $this->client->get("zones/{$zoneIdentifier}/settings/ip_geolocation");
    }

    public function getIPv6(string $zoneIdentifier): HttpResponse
    {
        return $this->client->get("zones/{$zoneIdentifier}/settings/ipv6");
    }

    public function getMinify(string $zoneIdentifier): HttpResponse
    {
        return $this->client->get("zones/{$zoneIdentifier}/settings/minify");
    }

    public function getMobileRedirect(string $zoneIdentifier): HttpResponse
    {
        return $this->client->get("zones/{$zoneIdentifier}/settings/mobile_redirect");
    }

    public function getMirage(string $zoneIdentifier): HttpResponse
    {
        return $this->client->get("zones/{$zoneIdentifier}/settings/mirage");
    }

    public function getEnableErrorPagesOn(string $zoneIdentifier): HttpResponse
    {
        return $this->client->get("zones/{$zoneIdentifier}/settings/origin_error_page_pass_thru");
    }

    public function getOpportunisticEncryption(string $zoneIdentifier): HttpResponse
    {
        return $this->client->get("zones/{$zoneIdentifier}/settings/opportunistic_encryption");
    }

    public function getPolish(string $zoneIdentifier): HttpResponse
    {
        return $this->client->get("zones/{$zoneIdentifier}/settings/polish");
    }

    public function getWebP(string $zoneIdentifier): HttpResponse
    {
        return $this->client->get("zones/{$zoneIdentifier}/settings/webp");
    }

    public function getPrefetchPreload(string $zoneIdentifier): HttpResponse
    {
        return $this->client->get("zones/{$zoneIdentifier}/settings/prefetch_preload");
    }

    public function getResponseBuffering(string $zoneIdentifier): HttpResponse
    {
        return $this->client->get("zones/{$zoneIdentifier}/settings/response_buffering");
    }

    public function getRocketLoader(string $zoneIdentifier): HttpResponse
    {
        return $this->client->get("zones/{$zoneIdentifier}/settings/rocket_loader");
    }

    public function getSecurityHeaderHSTS(string $zoneIdentifier): HttpResponse
    {
        return $this->client->get("zones/{$zoneIdentifier}/settings/security_header");
    }

    public function getSecurityLevel(string $zoneIdentifier): HttpResponse
    {
        return $this->client->get("zones/{$zoneIdentifier}/settings/security_level");
    }

    public function getServerSideExclude(string $zoneIdentifier): HttpResponse
    {
        return $this->client->get("zones/{$zoneIdentifier}/settings/server_side_exclude");
    }

    public function getEnableQueryStringSort(string $zoneIdentifier): HttpResponse
    {
        return $this->client->get("zones/{$zoneIdentifier}/settings/sort_query_string_for_cache");
    }

    public function getSsl(string $zoneIdentifier): HttpResponse
    {
        return $this->client->get("zones/{$zoneIdentifier}/settings/ssl");
    }

    public function getZoneEnableTLS12(string $zoneIdentifier): HttpResponse
    {
        return $this->client->get("zones/{$zoneIdentifier}/settings/tls_1_2_only");
    }

    public function getZoneEnableTLS13(string $zoneIdentifier): HttpResponse
    {
        return $this->client->get("zones/{$zoneIdentifier}/settings/tls_1_3");
    }

    public function getTLSClientAuth(string $zoneIdentifier): HttpResponse
    {
        return $this->client->get("zones/{$zoneIdentifier}/settings/tls_client_auth");
    }

    public function getTrueClientIP(string $zoneIdentifier): HttpResponse
    {
        return $this->client->get("zones/{$zoneIdentifier}/settings/true_client_ip_header");
    }

    public function getWebApplicationFirewallWAF(string $zoneIdentifier): HttpResponse
    {
        return $this->client->get("zones/{$zoneIdentifier}/settings/waf");
    }

    public function getHttp2(string $zoneIdentifier): HttpResponse
    {
        return $this->client->get("zones/{$zoneIdentifier}/settings/http2");
    }

    public function getPseudoIpv4(string $zoneIdentifier): HttpResponse
    {
        return $this->client->get("zones/{$zoneIdentifier}/settings/pseudo_ipv4");
    }

    public function getWebSockets(string $zoneIdentifier): HttpResponse
    {
        return $this->client->get("zones/{$zoneIdentifier}/settings/websockets");
    }

    public function changeSettingsInfo(string $zoneIdentifier, array $parameters = []): HttpResponse
    {
        return $this->client->patch("zones/{$zoneIdentifier}/settings", $parameters);
    }

    public function changeAlwaysOnline(string $zoneIdentifier, array $parameters = []): HttpResponse
    {
        return $this->client->patch("zones/{$zoneIdentifier}/settings/always_online", $parameters);
    }

    public function changeAlwaysUseHTTPS(string $zoneIdentifier, array $parameters = []): HttpResponse
    {
        return $this->client->patch("zones/{$zoneIdentifier}/settings/always_use_https", $parameters);
    }

    public function changeAutomaticHTTPSRewrites(string $zoneIdentifier, array $parameters = []): HttpResponse
    {
        return $this->client->patch("zones/{$zoneIdentifier}/settings/automatic_https_rewrites", $parameters);
    }

    public function changeBrowserCacheTTL(string $zoneIdentifier, array $parameters = []): HttpResponse
    {
        return $this->client->patch("zones/{$zoneIdentifier}/settings/browser_cache_ttl", $parameters);
    }

    public function changeBrowserCheck(string $zoneIdentifier, array $parameters = []): HttpResponse
    {
        return $this->client->patch("zones/{$zoneIdentifier}/settings/browser_check", $parameters);
    }

    public function changeCacheLevel(string $zoneIdentifier, array $parameters = []): HttpResponse
    {
        return $this->client->patch("zones/{$zoneIdentifier}/settings/cache_level", $parameters);
    }

    public function changeChallengeTTL(string $zoneIdentifier, array $parameters = []): HttpResponse
    {
        return $this->client->patch("zones/{$zoneIdentifier}/settings/challenge_ttl", $parameters);
    }

    public function changeDevelopmentMode(string $zoneIdentifier, array $parameters = []): HttpResponse
    {
        return $this->client->patch("zones/{$zoneIdentifier}/settings/development_mode", $parameters);
    }

    public function changeEmailObfuscation(string $zoneIdentifier, array $parameters = []): HttpResponse
    {
        return $this->client->patch("zones/{$zoneIdentifier}/settings/email_obfuscation", $parameters);
    }

    public function changeEnableErrorPagesOn(string $zoneIdentifier, array $parameters = []): HttpResponse
    {
        return $this->client->patch("zones/{$zoneIdentifier}/settings/origin_error_page_pass_thru", $parameters);
    }

    public function changeEnableQueryStringSort(string $zoneIdentifier, array $parameters = []): HttpResponse
    {
        return $this->client->patch("zones/{$zoneIdentifier}/settings/sort_query_string_for_cache", $parameters);
    }

    public function changeHotlinkProtection(string $zoneIdentifier, array $parameters = []): HttpResponse
    {
        return $this->client->patch("zones/{$zoneIdentifier}/settings/hotlink_protection", $parameters);
    }

    public function changeIPGeolocation(string $zoneIdentifier, array $parameters = []): HttpResponse
    {
        return $this->client->patch("zones/{$zoneIdentifier}/settings/ip_geolocation", $parameters);
    }

    public function changeIPv6(string $zoneIdentifier, array $parameters = []): HttpResponse
    {
        return $this->client->patch("zones/{$zoneIdentifier}/settings/ipv6", $parameters);
    }

    public function changeMinify(string $zoneIdentifier, array $parameters = []): HttpResponse
    {
        return $this->client->patch("zones/{$zoneIdentifier}/settings/minify", $parameters);
    }

    public function changeMobileRedirect(string $zoneIdentifier, array $parameters = []): HttpResponse
    {
        return $this->client->patch("zones/{$zoneIdentifier}/settings/mobile_redirect", $parameters);
    }

    public function changeMirage(string $zoneIdentifier, array $parameters = []): HttpResponse
    {
        return $this->client->patch("zones/{$zoneIdentifier}/settings/mirage", $parameters);
    }

    public function changeOpportunisticEncryption(string $zoneIdentifier, array $parameters = []): HttpResponse
    {
        return $this->client->patch("zones/{$zoneIdentifier}/settings/opportunistic_encryption", $parameters);
    }

    public function changePolish(string $zoneIdentifier, array $parameters = []): HttpResponse
    {
        return $this->client->patch("zones/{$zoneIdentifier}/settings/polish", $parameters);
    }

    public function changeWebP(string $zoneIdentifier, array $parameters = []): HttpResponse
    {
        return $this->client->patch("zones/{$zoneIdentifier}/settings/web", $parameters);
    }

    public function changePrefetchPreload(string $zoneIdentifier, array $parameters = []): HttpResponse
    {
        return $this->client->patch("zones/{$zoneIdentifier}/settings/prefetch_preload", $parameters);
    }

    public function changeResponseBuffering(string $zoneIdentifier, array $parameters = []): HttpResponse
    {
        return $this->client->patch("zones/{$zoneIdentifier}/settings/response_buffering", $parameters);
    }

    public function changeRocketLoader(string $zoneIdentifier, array $parameters = []): HttpResponse
    {
        return $this->client->patch("zones/{$zoneIdentifier}/settings/rocket_loader", $parameters);
    }

    public function changeSecurityHeaderHSTS(string $zoneIdentifier, array $parameters = []): HttpResponse
    {
        return $this->client->patch("zones/{$zoneIdentifier}/settings/security_header", $parameters);
    }

    public function changeSecurityLevel(string $zoneIdentifier, array $parameters = []): HttpResponse
    {
        return $this->client->patch("zones/{$zoneIdentifier}/settings/security_level", $parameters);
    }

    public function changeServerSideExclude(string $zoneIdentifier, array $parameters = []): HttpResponse
    {
        return $this->client->patch("zones/{$zoneIdentifier}/settings/server_side_exclude", $parameters);
    }

    public function changeSsl(string $zoneIdentifier, array $parameters = []): HttpResponse
    {
        return $this->client->patch("zones/{$zoneIdentifier}/settings/ssl", $parameters);
    }

    public function changeTLSClientAuth(string $zoneIdentifier, array $parameters = []): HttpResponse
    {
        return $this->client->patch("zones/{$zoneIdentifier}/settings/tls_client_auth", $parameters);
    }

    public function changeTrueClientIP(string $zoneIdentifier, array $parameters = []): HttpResponse
    {
        return $this->client->patch("zones/{$zoneIdentifier}/settings/true_client_ip_header", $parameters);
    }

    public function changeTls12(string $zoneIdentifier, array $parameters = []): HttpResponse
    {
        return $this->client->patch("zones/{$zoneIdentifier}/settings/tls_1_2_only", $parameters);
    }

    public function changeTls13(string $zoneIdentifier, array $parameters = []): HttpResponse
    {
        return $this->client->patch("zones/{$zoneIdentifier}/settings/tls_1_3", $parameters);
    }

    public function changeWebApplicationFirewallWAF(string $zoneIdentifier, array $parameters = []): HttpResponse
    {
        return $this->client->patch("zones/{$zoneIdentifier}/settings/waf", $parameters);
    }

    public function changeHttp2(string $zoneIdentifier, array $parameters = []): HttpResponse
    {
        return $this->client->patch("zones/{$zoneIdentifier}/settings/http2", $parameters);
    }

    public function changePseudoIpv4(string $zoneIdentifier, array $parameters = []): HttpResponse
    {
        return $this->client->patch("zones/{$zoneIdentifier}/settings/pseudo_ipv4", $parameters);
    }

    public function changeWebSockets(string $zoneIdentifier, array $parameters = []): HttpResponse
    {
        return $this->client->patch("zones/{$zoneIdentifier}/settings/websockets", $parameters);
    }
}
