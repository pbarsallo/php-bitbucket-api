<?php

declare(strict_types=1);

namespace Bitbucket\Api\Teams;

/**
 * Team Following API Class
 * @see https://developer.atlassian.com/bitbucket/api/2/reference/resource/teams/%7Busername%7D/following
 *
 * @author Patrick Barsallo
 */
class Following extends BaseTeamsApi
{
    /**
     * List accounts that follow a specific team
     *
     * @param array $params
     *
     * @return array
     */
    public function all(array $params = []) : array
    {
        return $this->get("{$this->teamUri}/following", $params);
    }
}
