<?php

declare(strict_types=1);

namespace Bitbucket\Api\Snippets\User;

use Bitbucket\Api\Snippets\BaseSnippetsApi;

/**
 * Base User Snippet API Class
 *
 * @author Patrick Barsallo
 */
class BaseUserApi extends BaseSnippetsApi
{
    /**
     * @var string
     */
    protected $encodedId;

    /**
     * @var string
     */
    protected $userSnippetUri;

    /**
     * Create new base user API instance
     *
     * @param string $encodedId
     *
     * @return void
     */
    public function __construct(string $encodedId)
    {
        parent::__construct($this->username);
        $this->encodedId = $encodedId;
        $this->userSnippetUri = "{$this->userSnippetsUri}/{$encodedId}";
    }
}
