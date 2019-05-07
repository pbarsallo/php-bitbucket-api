<?php

declare(strict_types=1);

namespace Bitbucket\Http;

use Lcobucci\JWT\Builder;
use Lcobucci\JWT\Signer\Hmac\Sha256;
use Lcobucci\JWT\Token;

/**
 * JWT Authentication Based HTTP Client
 *
 * @author Patrick Barsallo
 */
class JwtAuthClient extends HttpClient
{
    /**
     * @var string
     */
    private $integrationKey;

    /**
     * @var string
     */
    private $clientKey;

    /**
     * @var string
     */
    private $sharedSecret;

    /**
     * Create a JWT authentication client instance
     *
     * @param string $integrationKey
     * @param string $clientKey
     * @param string $sharedSecret
     *
     * @return void
     */
    public function __construct(string $integrationKey, string $clientKey, string $sharedSecret)
    {
        parent::__construct();
        $this->integrationKey = $integrationKey;
        $this->clientKey = $clientKey;
        $this->sharedSecret = $sharedSecret;
    }

    /*
     * Generate JWT authorization header string
     *
     * @return string
     */
    public function authorizationHeader(): string
    {
        return "JWT {$this->buildAuthorizationHeader()}";
    }

    /**
     * Build JWT header based on current request
     *
     * @return Token
     */
    private function buildAuthorizationHeader() : Token
    {
        $requestUrl = self::BASE_URL . $this->uri . '?' . http_build_query($this->params);
        $parsedUrl = parse_url($requestUrl);

        $queryStringHash = new QueryStringHash(
            $this->method,
            $parsedUrl['path'],
            $parsedUrl['query'] ?? ''
        );

        return (new Builder)
            ->setIssuer($this->integrationKey)
            ->setIssuedAt(time())
            ->setExpiration(time() + (60 * 3))
            ->setSubject($this->clientKey)
            ->set('qsh', $queryStringHash->hexDigest())
            ->sign(new Sha256, $this->sharedSecret)
            ->getToken();
    }
}
