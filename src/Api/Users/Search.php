<?php

declare(strict_types=1);

namespace Bitbucket\Api\Users;

/**
 * Users Search API Class
 * @see https://developer.atlassian.com/bitbucket/api/2/reference/resource/users/%7Busername%7D/search
 *
 * @author Patrick Barsallo
 */
class Search extends BaseUsersApi
{
    /**
     * Search for code in user's repositories
     *
     * @param array $params
     *
     * @return array
     */
    public function all(array $params = []) : array
    {
        return $this->get("{$this->userUri}/search/code", $params);
    }
}
