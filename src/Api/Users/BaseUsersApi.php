<?php

declare(strict_types=1);

namespace Bitbucket\Api\Users;

use Bitbucket\Api\BaseApi;

/**
 * Base Users API Class
 *
 * @author Patrick Barsallo
 */
class BaseUsersApi extends BaseApi
{
    /**
     * @var string
     */
    protected $userUri;

    /**
     * Create new base users API instance
     *
     * @param string $username
     *
     * @return void
     */
    public function __construct(string $username)
    {
        parent::__construct($this->httpClient);
        $this->userUri = "/users/{$username}";
    }
}
