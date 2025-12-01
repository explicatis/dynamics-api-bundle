<?php declare(strict_types=1);

namespace Explicatis\DynamicsApiBundle;

use Explicatis\DynamicsPhpApi\DynamicsWrapper;
use Symfony\Component\DependencyInjection\Attribute\Autowire;
use Symfony\Contracts\HttpClient\HttpClientInterface;

class DynamicsService extends DynamicsWrapper
{
    public function __construct(
        #[Autowire(env: 'DYNAMICS_AUTH_BASE_URL')]
        string $dynamicsAuthBaseUrl,
        #[Autowire(env: 'DYNAMICS_API_BASE_URL')]
        string $dynamicsApiBaseUrl,
        #[Autowire(env: 'DYNAMICS_TENANT_ID')]
        string $dynamicsTenantId,
        #[Autowire(env: 'DYNAMICS_APP_ID')]
        string $dynamicsAppId,
        #[Autowire(env: 'DYNAMICS_CLIENT_KEY')]
        string $dynamicsClientKey,
        HttpClientInterface $httpClient
    ) {
        parent::__construct(
            $dynamicsAuthBaseUrl,
            $dynamicsApiBaseUrl,
            $dynamicsTenantId,
            $dynamicsAppId,
            $dynamicsClientKey,
            $httpClient
        );
    }
}
