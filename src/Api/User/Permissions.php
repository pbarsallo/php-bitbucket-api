<?php

declare(strict_types=1);

namespace Bitbucket\Api\User;

use Bitbucket\Api\User\Permissions\Repositories;
use Bitbucket\Api\User\Permissions\Teams;

/**
 * User Permissions API Class
 * @see https://developer.atlassian.com/bitbucket/api/2/reference/resource/user/permissions
 *
 * @author Patrick Barsallo
 */
class Permissions extends BaseUserApi
{
    /**
     * Get user repositories API
     *
     * @return Repositories
     */
    public function repositories() : Repositories
    {
        return new Repositories;
    }

    /**
     * Get user teams API
     *
     * @return Teams
     */
    public function teams() : Teams
    {
        return new Teams;
    }
}
