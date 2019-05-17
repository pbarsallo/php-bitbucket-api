<?php

declare(strict_types=1);

namespace Bitbucket\Api\Users;

/**
 * Users Repositories API Class
 * @see https://developer.atlassian.com/bitbucket/api/2/reference/resource/users/%7Busername%7D/repositories
 *
 * @author Patrick Barsallo
 */
class Repositories extends BaseUsersApi
{
    /**
     * List all repositories owned by user
     *
     * @param array $params
     *
     * @return array
     */
    public function all(array $params = []) : array
    {
        return $this->get("{$this->userUri}/repositories", $params);
    }
}
