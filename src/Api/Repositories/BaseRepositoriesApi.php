<?php

declare(strict_types=1);

namespace Bitbucket\Api\Repositories;

use Bitbucket\Api\BaseApi;
use Bitbucket\Http\HttpClient;

/**
 * Base Repositories API Class
 *
 * @author Patrick Barsallo
 */
class BaseRepositoriesApi extends BaseApi
{
    /**
     * @var string
     */
    protected $username;

    /**
     * @var string
     */
    protected $workspaceRepositoriesUri;

    /**
     * Create a new base repositories API instance
     *
     * @param HttpClient $httpClient
     * @param string     $account
     *
     * @return void
     */
    public function __construct(string $account)
    {
        parent::__construct($this->httpClient);
        $this->username = $account;
        $this->workspaceRepositoriesUri = "/repositories/{$account}";
    }
}
