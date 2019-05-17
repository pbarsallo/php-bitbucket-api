<?php

declare(strict_types=1);

namespace Bitbucket\Api\Snippets;

use Bitbucket\Api\BaseApi;

/**
 * Base Snippets API Class
 *
 * @author Patrick Barsallo
 */
class BaseSnippetsApi extends BaseApi
{
    /**
     * @var string
     */
    protected $username;

    /**
     * @var string
     */
    protected $userSnippetsUri;

    /**
     * Create new base snippets API instance
     *
     * @param string $username
     *
     * @return void
     */
    public function __construct(string $username)
    {
        parent::__construct($this->httpClient);
        $this->username = $username;
        $this->userSnippetsUri = "/snippets/{$username}";
    }
}
