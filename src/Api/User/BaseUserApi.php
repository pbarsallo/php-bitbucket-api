<?php

declare(strict_types=1);

namespace Bitbucket\Api\User;

use Bitbucket\Api\BaseApi;

/**
 * Base User API Class
 *
 * @author Patrick Barsallo
 */
class BaseUserApi extends BaseApi
{
    /**
     * @var string
     */
    protected $userUri;

    /**
     * Create new base user API instance
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct($this->httpClient);
        $this->userUri = '/user';
    }
}
