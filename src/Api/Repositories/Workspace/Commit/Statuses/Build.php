<?php

declare(strict_types=1);

namespace Bitbucket\Api\Repositories\Workspace\Commit\Statuses;

/**
 * Workspace Repositories Commit Statuses Build API Class
 * @see https://developer.atlassian.com/bitbucket/api/2/reference/resource/repositories/%7Bworkspace%7D/%7Brepo_slug%7D/commit/%7Bnode%7D/statuses/build
 *
 * @package Bitbucket\Api\Repositories\Workspace\Commit\Statuses
 */
class Build extends BaseStatusesApi
{
    /**
     * Create a new build status
     *
     * @param array $params
     *
     * @return array
     */
    public function create(array $params) : array
    {
        return $this->post("{$this->statusesUri}/build", $params);
    }

    /**
     * Update the status of a build status object
     *
     * @param string $key
     * @param array  $params
     *
     * @return array
     */
    public function update(string $key, array $params) : array
    {
        return $this->put("{$this->statusesUri}/build/{$key}", $params);
    }

    /**
     * Get a specific build status object
     *
     * @param string $key
     * @param array  $params
     *
     * @return array
     */
    public function show(string $key, array $params = []) : array
    {
        return $this->get("{$this->statusesUri}/build/{$key}", $params);
    }
}
