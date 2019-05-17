<?php

declare(strict_types=1);

namespace Bitbucket\Api\User\Permissions;

/**
 * User Repositories Permissions API Class
 * @see https://developer.atlassian.com/bitbucket/api/2/reference/resource/user/permissions/repositories
 *
 * @author Patrick Barsallo
 */
class Repositories extends BasePermissionsApi
{
    /**
     * List all user repository permissions
     *
     * @param array $params
     *
     * @return array
     */
    public function all(array $params = [])
    {
        return $this->get("{$this->permissionsUri}/repositories", $params);
    }
}
