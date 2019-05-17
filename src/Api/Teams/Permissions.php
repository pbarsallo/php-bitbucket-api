<?php

declare(strict_types=1);

namespace Bitbucket\Api\Teams;


use Bitbucket\Api\Teams\Permissions\Repositories;

/**
 * Team Permissions API Class
 * @see https://developer.atlassian.com/bitbucket/api/2/reference/resource/teams/%7Busername%7D/permissions
 *
 * @author Patrick Barsallo
 */
class Permissions extends BaseTeamsApi
{
    /**
     * List all permissions for team
     *
     * @param array $params
     *
     * @return array
     */
    public function all(array $params = []) : array
    {
        return $this->get("{$this->teamUri}/permissions", $params);
    }

    /*
     * Get team repositories permissions API
     *
     * @return Repositories
     */
    public function repositories() : Repositories
    {
        return new Repositories;
    }
}
