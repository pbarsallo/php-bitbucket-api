<?php

declare(strict_types=1);

namespace Bitbucket\Api\Teams;

/**
 * Team Repositories API Class
 * @see https://developer.atlassian.com/bitbucket/api/2/reference/resource/teams/%7Busername%7D/repositories
 *
 * @author Patrick Barsallo
 */
class Repositories extends BaseTeamsApi
{
    /**
     * List repositories owned by team
     *
     * @param array $params
     *
     * @return array
     */
    public function all(array $params = []) : array
    {
        return $this->get("{$this->teamUri}/repositories", $params);
    }
}
