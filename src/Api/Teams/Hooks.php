<?php

declare(strict_types=1);

namespace Bitbucket\Api\Teams;

/**
 * Teams Hooks API Class
 * @see https://developer.atlassian.com/bitbucket/api/2/reference/resource/teams/%7Busername%7D/hooks
 *
 * @author Patrick Barsallo
 */
class Hooks extends BaseTeamsApi
{
    /**
     * Create webhook for team
     *
     * @param array $params
     *
     * @return array
     */
    public function create(array $params = []) : array
    {
        return $this->post("{$this->teamUri}/hooks", $params);
    }

    /**
     * List all webhooks for team
     *
     * @param array $params
     *
     * @return array
     */
    public function all(array $params = []) : array
    {
        return $this->get("{$this->teamUri}/hooks", $params);
    }

    /**
     * Update webhook for team
     *
     * @param string $uid
     * @param array  $params
     *
     * @return array
     */
    public function update(string $uid, array $params = []) : array
    {
        return $this->put("{$this->teamUri}/hooks/{$uid}", $params);
    }

    /**
     * Get specific webhook for team
     *
     * @param string $uid
     * @param array  $params
     *
     * @return array
     */
    public function show(string $uid, array $params = []) : array
    {
        return $this->get("{$this->teamUri}/hooks/{$uid}", $params);
    }

    /**
     * Delete webhook for team
     *
     * @param string $uid
     * @param array  $params
     *
     * @return array
     */
    public function remove(string $uid, array $params = []) : array
    {
        return $this->delete("{$this->teamUri}/hooks/{$uid}", $params);
    }
}
