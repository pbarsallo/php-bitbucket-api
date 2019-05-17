<?php

declare(strict_types=1);

namespace Bitbucket\Api\Users;

/**
 * Users Following API Class
 * @see https://developer.atlassian.com/bitbucket/api/2/reference/resource/users/%7Busername%7D/following
 *
 * @author Patrick Barsallo
 */
class Following extends BaseUsersApi
{
    /**
     * List accounts that the user is following
     *
     * @param array $params
     *
     * @return array
     */
    public function all(array $params = []) : array
    {
        return $this->get("{$this->userUri}/following", $params);
    }
}
