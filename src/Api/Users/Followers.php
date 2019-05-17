<?php

declare(strict_types=1);

namespace Bitbucket\Api\Users;

/**
 * Users Followers API Class
 * @see https://developer.atlassian.com/bitbucket/api/2/reference/resource/users/%7Busername%7D/followers
 *
 * @author Patrick Barsallo
 */
class Followers extends BaseUsersApi
{
    /**
     * List all follower for user
     *
     * @param array $params
     *
     * @return array
     */
    public function all(array $params = []) : array
    {
        return $this->get("{$this->userUri}/followers", $params);
    }
}
