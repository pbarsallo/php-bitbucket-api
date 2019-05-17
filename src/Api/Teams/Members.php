<?php

declare(strict_types=1);

namespace Bitbucket\Api\Teams;

/**
 * Teams Members API Class
 * @see https://developer.atlassian.com/bitbucket/api/2/reference/resource/teams/%7Busername%7D/members
 *
 * @author Patrick Barsallo
 */
class Members extends BaseTeamsApi
{
    /**
     * List members for specific team
     *
     * @param array $params
     *
     * @return array
     */
    public function all(array $params = [])
    {
        return $this->get("{$this->teamUri}/members", $params);
    }
}
