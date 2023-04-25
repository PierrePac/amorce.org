<?php

namespace ContainerRNxxfFu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getGesdinet_Jwtrefreshtoken_AuthenticatorService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'gesdinet.jwtrefreshtoken.authenticator' shared service.
     *
     * @return \Gesdinet\JWTRefreshTokenBundle\Security\Authenticator\RefreshTokenAuthenticator
     *
     * @deprecated Since gesdinet/jwt-refresh-token-bundle 1.0: The "gesdinet.jwtrefreshtoken.authenticator" service is deprecated.
     */
    public static function do($container, $lazyLoad = true)
    {
        trigger_deprecation('gesdinet/jwt-refresh-token-bundle', '1.0', 'The "gesdinet.jwtrefreshtoken.authenticator" service is deprecated.');

        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/User/UserCheckerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/User/InMemoryUserChecker.php';

        return new \Gesdinet\JWTRefreshTokenBundle\Security\Authenticator\RefreshTokenAuthenticator(($container->privates['security.user_checker'] ??= new \Symfony\Component\Security\Core\User\InMemoryUserChecker()), 'refresh_token', ($container->services['gesdinet.jwtrefreshtoken.request.extractor.chain'] ?? $container->load('getGesdinet_Jwtrefreshtoken_Request_Extractor_ChainService')));
    }
}
