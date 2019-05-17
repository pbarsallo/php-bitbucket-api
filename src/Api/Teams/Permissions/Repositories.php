<?php

declare(strict_types=1);

namespace Bitbucket\Api\Teams\Permissions;

/**
 * Team Repositories Permissions API Class
 * @see https://developer.atlassian.com/bitbucket/api/2/reference/resource/teams/%7Busername%7D/permissions/repositories
 *
 * @author Patrick Barsallo
 */
class Repositories extends BasePermissionsApi
{
    /**
     * List all team repositories permissions
     *
     * @param array $params
     *
     * @return array
     */
    public function all(array $params = []) : array
    {
        return $this->get("{$this->permissionsUri}/repositories", $params);
    }

    /**
     * Get team permissions for specific repository
     *
     * @param string $repoSlug
     * @param array  $params
     *
     * @return array
     */
    public function show(string $repoSlug, array $params = []) : array
    {
        return $this->get("{$this->permissionsUri}/repositories/{$repoSlug}", $params);
    }
}
