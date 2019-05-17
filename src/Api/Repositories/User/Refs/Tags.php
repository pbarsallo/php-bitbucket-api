<?php

declare(strict_types=1);

namespace Bitbucket\Api\Repositories\User\Refs;

/**
 * User Repository Refs Tags API Class
 * @see https://developer.atlassian.com/bitbucket/api/2/reference/resource/repositories/%7Busername%7D/%7Brepo_slug%7D/refs/tags
 *
 * @author Patrick Barsallo
 */
class Tags extends BaseRefsApi
{
    /**
     * Create a new tag
     *
     * @param array $params
     *
     * @return array
     */
    public function create(array $params = []) : array
    {
        return $this->post("{$this->refsUri}/tags", $params);
    }

    /**
     * List all tags
     *
     * @param array $params
     *
     * @return array
     */
    public function all(array $params = []) : array
    {
        return $this->get("{$this->refsUri}/tags", $params);
    }

    /**
     * Get a specific tag
     *
     * @param string $name
     * @param array  $params
     *
     * @return array
     */
    public function show(string $name, array $params = []) : array
    {
        return $this->get("{$this->refsUri}/tags/{$name}", $params);
    }

    /**
     * Remove a specific tag
     *
     * @param string $name
     * @param array  $params
     *
     * @return array
     */
    public function remove(string $name, array $params = []) : array
    {
        return $this->delete("{$this->refsUri}/tags/{$name}", $params);
    }
}
