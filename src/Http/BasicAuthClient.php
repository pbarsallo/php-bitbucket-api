<?php

declare(strict_types=1);

namespace Bitbucket\Http;

/**
 * HTTP Basic Authentication Client
 *
 * @author Patrick Barsallo
 */
class BasicAuthClient extends HttpClient
{
    /**
     * @var string
     */
    private $username;

    /**
     * @var string
     */
    private $password;

    /**
     * Create a basic authentication client instance
     *
     * @param string $username
     * @param string $password
     *
     * @return void
     */
    public function __construct(string $username, string $password)
    {
        parent::__construct();
        $this->username = $username;
        $this->password = $password;
    }

    /**
     * Generate HTTP basic authorization header
     *
     * @return string
     */
    public function authorizationHeader() : string
    {
        return 'Basic ' . base64_encode("{$this->username}:{$this->password}");
    }
}
