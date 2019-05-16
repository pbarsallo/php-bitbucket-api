<?php

declare(strict_types=1);

namespace Bitbucket\Api\Repositories\User;

use Bitbucket\Api\Repositories\BaseRepositoriesApi;
use Bitbucket\Http\HttpClient;

/**
 * Base User Repositories API Class
 *
 * @author Patrick Barsallo
 */
class BaseUserApi extends BaseRepositoriesApi
{
    /**
     * @var string
     */
    protected $repoSlug;

    /**
     * @var string
     */
    protected $userRepositoryUri;

    /**
     * Create new base user API instance
     *
     * @param HttpClient $httpClient
     * @param string     $repoSlug
     *
     * @return void
     */
    public function __construct(string $repoSlug)
    {
        parent::__construct($this->username);
        $this->repoSlug = $repoSlug;
        $this->userRepositoryUri = "{$this->userRepositoriesUri}/{$repoSlug}";
    }
}
