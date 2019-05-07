<?php

declare(strict_types=1);

namespace Bitbucket\Http;

/**
 * OAuth 2.0 Authentication Based HTTP Client
 *
 * @author Patrick Barsallo
 */
class OauthClient extends HttpClient
{
    /**
     * @var string
     */
    private $oauthToken;

    /**
     * Create an OAauth 2.0 client instance
     *
     * @param string $oauthToken
     *
     * @return void
     */
    public function __construct(string $oauthToken)
    {
        parent::__construct();
        $this->oauthToken = $oauthToken;
    }

    /**
     * Generate OAuth 2.0 authorization header
     *
     * @return string
     */
    public function authorizationHeader(): string
    {
        return "Bearer {$this->oauthToken}";
    }
}
