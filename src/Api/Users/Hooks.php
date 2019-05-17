<?php

declare(strict_types=1);

namespace Bitbucket\Api\Users;

/**
 * Users Hooks API Class
 * @see https://developer.atlassian.com/bitbucket/api/2/reference/resource/users/%7Busername%7D/hooks
 *
 * @author Patrick Barsallo
 */
class Hooks extends BaseUsersApi
{
    /**
     * Create new webhook for user
     *
     * @param array $params
     *
     * @return array
     */
    public function create(array $params = []) : array
    {
        return $this->post("{$this->userUri}/hooks", $params);
    }

    /**
     * List all webhooks for user
     *
     * @param array $params
     *
     * @return array
     */
    public function all(array $params = []) : array
    {
        return $this->get("{$this->userUri}/hooks", $params);
    }

    /**
     * Update specific webhook for user
     *
     * @param string $uid
     * @param array  $params
     *
     * @return array
     */
    public function update(string $uid, array $params = []) : array
    {
        return $this->put("{$this->userUri}/hooks/{$uid}", $params);
    }

    /**
     * Get specific webhook for user
     *
     * @param string $uid
     * @param array  $params
     *
     * @return array
     */
    public function show(string $uid, array $params = []) : array
    {
        return $this->get("{$this->userUri}/hooks/{$uid}", $params);
    }

    /**
     * Delete specific webhook for user
     *
     * @param string $uid
     * @param array  $params
     *
     * @return array
     */
    public function remove(string $uid, array $params = []) : array
    {
        return $this->delete("{$this->userUri}/hooks/{$uid}", $params);
    }
}
