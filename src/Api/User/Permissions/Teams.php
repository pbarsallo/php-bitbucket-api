<?php

declare(strict_types=1);

namespace Bitbucket\Api\User\Permissions;

/**
 * User Teams Permissions API Class
 * @see https://developer.atlassian.com/bitbucket/api/2/reference/resource/user/permissions/teams
 *
 * @author Patrick Barsallo
 */
class Teams extends BasePermissionsApi
{
    /**
     * List all user teams permissions
     *
     * @param array $params
     *
     * @return array
     */
    public function all(array $params = [])
    {
        return $this->get("{$this->permissionsUri}/teams", $params);
    }
}
