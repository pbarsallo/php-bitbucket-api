<?php

declare(strict_types=1);

namespace Bitbucket\Api\Teams;

/**
 * Teams Followers API Class
 * @see https://developer.atlassian.com/bitbucket/api/2/reference/resource/teams/%7Busername%7D/followers
 *
 * @author Patrick Barsallo
 */
class Followers extends BaseTeamsApi
{
    /**
     * List all team followers
     *
     * @param array $params
     *
     * @return array
     */
    public function all(array $params = []) : array
    {
        return $this->get("{$this->teamUri}/followers", $params);
    }
}
