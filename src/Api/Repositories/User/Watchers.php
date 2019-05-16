<?php

declare(strict_types=1);

namespace Bitbucket\Api\Repositories\User;

/**
 * Repository watchers class
 * @see https://developer.atlassian.com/bitbucket/api/2/reference/resource/repositories/%7Busername%7D/%7Brepo_slug%7D/watchers
 *
 * @author Patrick Barsallo
 */
class Watchers extends BaseUserApi
{
    /**
     * Get all watchers for a specific repository
     *
     * @param array $params
     *
     * @return array
     */
    public function all(array $params = []) : array
    {
        return $this->get("{$this->userRepositoryUri}/watchers", $params);
    }
}
