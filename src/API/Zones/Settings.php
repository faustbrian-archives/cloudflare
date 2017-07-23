<?php

/*
 * This file is part of CloudFlare PHP Client.
 *
 * (c) Brian Faust <hello@brianfaust.me>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\CloudFlare\API\Zones;

use BrianFaust\Http\HttpResponse;
use BrianFaust\CloudFlare\API\AbstractAPI;

class Settings extends AbstractAPI
{
    public function getAllZone(array $parameters = []): HttpResponse
    {
        return $this->client->get("zones/{$zoneIdentifier}/settings", $parameters);
    }

    public function getAdvancedDDOS(array $parameters = []): HttpResponse
    {
        return $this->client->get("zones/{$zoneIdentifier}/settings/advanced_ddos", $parameters);
    }

    public function getAlwaysOnline(array $parameters = []): HttpResponse
    {
        return $this->client->get("zones/{$zoneIdentifier}/settings/always_online", $parameters);
    }

    public function getAlwaysUseHTTPS(array $parameters = []): HttpResponse
    {
        return $this->client->get("zones/{$zoneIdentifier}/settings/always_use_https", $parameters);
    }

    public function getAutomaticHTTPSRewrites(array $parameters = []): HttpResponse
    {
        return $this->client->get("zones/{$zoneIdentifier}/settings/automatic_https_rewrites", $parameters);
    }

    public function getBrowserCacheTTL(array $parameters = []): HttpResponse
    {
        return $this->client->get("zones/{$zoneIdentifier}/settings/browser_cache_ttl", $parameters);
    }

    public function getBrowserCheck(array $parameters = []): HttpResponse
    {
        return $this->client->get("zones/{$zoneIdentifier}/settings/browser_check", $parameters);
    }

    public function getCacheLevel(array $parameters = []): HttpResponse
    {
        return $this->client->get("zones/{$zoneIdentifier}/settings/cache_level", $parameters);
    }

    public function getChallengeTTL(array $parameters = []): HttpResponse
    {
        return $this->client->get("zones/{$zoneIdentifier}/settings/challenge_ttl", $parameters);
    }

    public function getDevelopmentMode(array $parameters = []): HttpResponse
    {
        return $this->client->get("zones/{$zoneIdentifier}/settings/development_mode", $parameters);
    }

    public function getEmailObfuscation(array $parameters = []): HttpResponse
    {
        return $this->client->get("zones/{$zoneIdentifier}/settings/email_obfuscation", $parameters);
    }

    public function getHotlinkProtection(array $parameters = []): HttpResponse
    {
        return $this->client->get("zones/{$zoneIdentifier}/settings/hotlink_protection", $parameters);
    }

    public function getIPGeolocation(array $parameters = []): HttpResponse
    {
        return $this->client->get("zones/{$zoneIdentifier}/settings/ip_geolocation", $parameters);
    }

    public function getIPv6(array $parameters = []): HttpResponse
    {
        return $this->client->get("zones/{$zoneIdentifier}/settings/ipv6", $parameters);
    }

    public function getMinify(array $parameters = []): HttpResponse
    {
        return $this->client->get("zones/{$zoneIdentifier}/settings/minify", $parameters);
    }

    public function getMobileRedirect(array $parameters = []): HttpResponse
    {
        return $this->client->get("zones/{$zoneIdentifier}/settings/mobile_redirect", $parameters);
    }

    public function getMirage(array $parameters = []): HttpResponse
    {
        return $this->client->get("zones/{$zoneIdentifier}/settings/mirage", $parameters);
    }

    public function getEnableErrorPagesOn(array $parameters = []): HttpResponse
    {
        return $this->client->get("zones/{$zoneIdentifier}/settings/origin_error_page_pass_thru", $parameters);
    }

    public function getOpportunisticEncryption(array $parameters = []): HttpResponse
    {
        return $this->client->get("zones/{$zoneIdentifier}/settings/opportunistic_encryption", $parameters);
    }

    public function getPolish(array $parameters = []): HttpResponse
    {
        return $this->client->get("zones/{$zoneIdentifier}/settings/polish", $parameters);
    }

    public function getWebP(array $parameters = []): HttpResponse
    {
        return $this->client->get("zones/{$zoneIdentifier}/settings/webp", $parameters);
    }

    public function getPrefetchPreload(array $parameters = []): HttpResponse
    {
        return $this->client->get("zones/{$zoneIdentifier}/settings/prefetch_preload", $parameters);
    }

    public function getResponseBuffering(array $parameters = []): HttpResponse
    {
        return $this->client->get("zones/{$zoneIdentifier}/settings/response_buffering", $parameters);
    }

    public function getRocketLoader(array $parameters = []): HttpResponse
    {
        return $this->client->get("zones/{$zoneIdentifier}/settings/rocket_loader", $parameters);
    }

    public function getSecurityHeaderHSTS(array $parameters = []): HttpResponse
    {
        return $this->client->get("zones/{$zoneIdentifier}/settings/security_header", $parameters);
    }

    public function getSecurityLevel(array $parameters = []): HttpResponse
    {
        return $this->client->get("zones/{$zoneIdentifier}/settings/security_level", $parameters);
    }

    public function getServerSideExclude(array $parameters = []): HttpResponse
    {
        return $this->client->get("zones/{$zoneIdentifier}/settings/server_side_exclude", $parameters);
    }

    public function getEnableQueryStringSort(array $parameters = []): HttpResponse
    {
        return $this->client->get("zones/{$zoneIdentifier}/settings/sort_query_string_for_cache", $parameters);
    }

    public function getSsl(array $parameters = []): HttpResponse
    {
        return $this->client->get("zones/{$zoneIdentifier}/settings/ssl", $parameters);
    }

    public function getZoneEnableTLS12(array $parameters = []): HttpResponse
    {
        return $this->client->get("zones/{$zoneIdentifier}/settings/tls_1_2_only", $parameters);
    }

    public function getZoneEnableTLS13(array $parameters = []): HttpResponse
    {
        return $this->client->get("zones/{$zoneIdentifier}/settings/tls_1_3", $parameters);
    }

    public function getTLSClientAuth(array $parameters = []): HttpResponse
    {
        return $this->client->get("zones/{$zoneIdentifier}/settings/tls_client_auth", $parameters);
    }

    public function getTrueClientIP(array $parameters = []): HttpResponse
    {
        return $this->client->get("zones/{$zoneIdentifier}/settings/true_client_ip_header", $parameters);
    }

    public function getWebApplicationFirewallWAF(array $parameters = []): HttpResponse
    {
        return $this->client->get("zones/{$zoneIdentifier}/settings/waf", $parameters);
    }

    public function getHttp2(array $parameters = []): HttpResponse
    {
        return $this->client->get("zones/{$zoneIdentifier}/settings/http2", $parameters);
    }

    public function getPseudoIpv4(array $parameters = []): HttpResponse
    {
        return $this->client->get("zones/{$zoneIdentifier}/settings/pseudo_ipv4", $parameters);
    }

    public function getWebSockets(array $parameters = []): HttpResponse
    {
        return $this->client->get("zones/{$zoneIdentifier}/settings/websockets", $parameters);
    }

    public function changeSettingsInfo(array $parameters = []): HttpResponse
    {
        return $this->client->patch("zones/{$zoneIdentifier}/settings", $parameters);
    }

    public function changeAlwaysOnline(array $parameters = []): HttpResponse
    {
        return $this->client->patch("zones/{$zoneIdentifier}/settings/always_online", $parameters);
    }

    public function changeAlwaysUseHTTPS(array $parameters = []): HttpResponse
    {
        return $this->client->patch("zones/{$zoneIdentifier}/settings/always_use_https", $parameters);
    }

    public function changeAutomaticHTTPSRewrites(array $parameters = []): HttpResponse
    {
        return $this->client->patch("zones/{$zoneIdentifier}/settings/automatic_https_rewrites", $parameters);
    }

    public function changeBrowserCacheTTL(array $parameters = []): HttpResponse
    {
        return $this->client->patch("zones/{$zoneIdentifier}/settings/browser_cache_ttl", $parameters);
    }

    public function changeBrowserCheck(array $parameters = []): HttpResponse
    {
        return $this->client->patch("zones/{$zoneIdentifier}/settings/browser_check", $parameters);
    }

    public function changeCacheLevel(array $parameters = []): HttpResponse
    {
        return $this->client->patch("zones/{$zoneIdentifier}/settings/cache_level", $parameters);
    }

    public function changeChallengeTTL(array $parameters = []): HttpResponse
    {
        return $this->client->patch("zones/{$zoneIdentifier}/settings/challenge_ttl", $parameters);
    }

    public function changeDevelopmentMode(array $parameters = []): HttpResponse
    {
        return $this->client->patch("zones/{$zoneIdentifier}/settings/development_mode", $parameters);
    }

    public function changeEmailObfuscation(array $parameters = []): HttpResponse
    {
        return $this->client->patch("zones/{$zoneIdentifier}/settings/email_obfuscation", $parameters);
    }

    public function changeEnableErrorPagesOn(array $parameters = []): HttpResponse
    {
        return $this->client->patch("zones/{$zoneIdentifier}/settings/origin_error_page_pass_thru", $parameters);
    }

    public function changeEnableQueryStringSort(array $parameters = []): HttpResponse
    {
        return $this->client->patch("zones/{$zoneIdentifier}/settings/sort_query_string_for_cache", $parameters);
    }

    public function changeHotlinkProtection(array $parameters = []): HttpResponse
    {
        return $this->client->patch("zones/{$zoneIdentifier}/settings/hotlink_protection", $parameters);
    }

    public function changeIPGeolocation(array $parameters = []): HttpResponse
    {
        return $this->client->patch("zones/{$zoneIdentifier}/settings/ip_geolocation", $parameters);
    }

    public function changeIPv6(array $parameters = []): HttpResponse
    {
        return $this->client->patch("zones/{$zoneIdentifier}/settings/ipv6", $parameters);
    }

    public function changeMinify(array $parameters = []): HttpResponse
    {
        return $this->client->patch("zones/{$zoneIdentifier}/settings/minify", $parameters);
    }

    public function changeMobileRedirect(array $parameters = []): HttpResponse
    {
        return $this->client->patch("zones/{$zoneIdentifier}/settings/mobile_redirect", $parameters);
    }

    public function changeMirage(array $parameters = []): HttpResponse
    {
        return $this->client->patch("zones/{$zoneIdentifier}/settings/mirage", $parameters);
    }

    public function changeOpportunisticEncryption(array $parameters = []): HttpResponse
    {
        return $this->client->patch("zones/{$zoneIdentifier}/settings/opportunistic_encryption", $parameters);
    }

    public function changePolish(array $parameters = []): HttpResponse
    {
        return $this->client->patch("zones/{$zoneIdentifier}/settings/polish", $parameters);
    }

    public function changeWebP(array $parameters = []): HttpResponse
    {
        return $this->client->patch("zones/{$zoneIdentifier}/settings/web", $parameters);
    }

    public function changePrefetchPreload(array $parameters = []): HttpResponse
    {
        return $this->client->patch("zones/{$zoneIdentifier}/settings/prefetch_preload", $parameters);
    }

    public function changeResponseBuffering(array $parameters = []): HttpResponse
    {
        return $this->client->patch("zones/{$zoneIdentifier}/settings/response_buffering", $parameters);
    }

    public function changeRocketLoader(array $parameters = []): HttpResponse
    {
        return $this->client->patch("zones/{$zoneIdentifier}/settings/rocket_loader", $parameters);
    }

    public function changeSecurityHeaderHSTS(array $parameters = []): HttpResponse
    {
        return $this->client->patch("zones/{$zoneIdentifier}/settings/security_header", $parameters);
    }

    public function changeSecurityLevel(array $parameters = []): HttpResponse
    {
        return $this->client->patch("zones/{$zoneIdentifier}/settings/security_level", $parameters);
    }

    public function changeServerSideExclude(array $parameters = []): HttpResponse
    {
        return $this->client->patch("zones/{$zoneIdentifier}/settings/server_side_exclude", $parameters);
    }

    public function changeSsl(array $parameters = []): HttpResponse
    {
        return $this->client->patch("zones/{$zoneIdentifier}/settings/ssl", $parameters);
    }

    public function changeTLSClientAuth(array $parameters = []): HttpResponse
    {
        return $this->client->patch("zones/{$zoneIdentifier}/settings/tls_client_auth", $parameters);
    }

    public function changeTrueClientIP(array $parameters = []): HttpResponse
    {
        return $this->client->patch("zones/{$zoneIdentifier}/settings/true_client_ip_header", $parameters);
    }

    public function changeTls12(array $parameters = []): HttpResponse
    {
        return $this->client->patch("zones/{$zoneIdentifier}/settings/tls_1_2_only", $parameters);
    }

    public function changeTls13(array $parameters = []): HttpResponse
    {
        return $this->client->patch("zones/{$zoneIdentifier}/settings/tls_1_3", $parameters);
    }

    public function changeWebApplicationFirewallWAF(array $parameters = []): HttpResponse
    {
        return $this->client->patch("zones/{$zoneIdentifier}/settings/waf", $parameters);
    }

    public function changeHttp2(array $parameters = []): HttpResponse
    {
        return $this->client->patch("zones/{$zoneIdentifier}/settings/http2", $parameters);
    }

    public function changePseudoIpv4(array $parameters = []): HttpResponse
    {
        return $this->client->patch("zones/{$zoneIdentifier}/settings/pseudo_ipv4", $parameters);
    }

    public function changeWebSockets(array $parameters = []): HttpResponse
    {
        return $this->client->patch("zones/{$zoneIdentifier}/settings/websockets", $parameters);
    }
}
