<?php

declare(strict_types=1);

namespace Bitbucket\Api\Users;

/**
 * Users Members API Class
 * @see https://developer.atlassian.com/bitbucket/api/2/reference/resource/users/%7Busername%7D/members
 *
 * @author Patrick Barsallo
 */
class Members extends BaseUsersApi
{
    /**
     * List all members of specified team
     *
     * @param array $params
     *
     * @return array
     */
    public function all(array $params = []) : array
    {
        return $this->get("{$this->userUri}/members", $params);
    }
}
