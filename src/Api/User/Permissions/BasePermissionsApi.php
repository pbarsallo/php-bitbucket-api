<?php

declare(strict_types=1);

namespace Bitbucket\Api\User\Permissions;

use Bitbucket\Api\User\BaseUserApi;

/**
 * Base User Permissions API Class
 *
 * @author Patrick Barsallo
 */
class BasePermissionsApi extends BaseUserApi
{
    /**
     * @var string
     */
    protected $permissionsUri;

    /**
     * Create new base user permissions API instance
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
        $this->permissionsUri = "{$this->userUri}/permissions";
    }
}

