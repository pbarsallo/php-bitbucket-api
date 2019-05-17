<?php

declare(strict_types=1);

namespace Bitbucket\Api\Repositories\User\Refs;

/**
 * User Repository Refs Branches API Class
 * @see https://developer.atlassian.com/bitbucket/api/2/reference/resource/repositories/%7Busername%7D/%7Brepo_slug%7D/refs/branches
 *
 * @author Patrick Barsallo
 */
class Branches extends BaseRefsApi
{
    /**
     * Create new branch
     *
     * @param array $params
     *
     * @return array
     */
    public function create(array $params = []) : array
    {
        return $this->post("{$this->refsUri}/branches", $params);
    }

    /**
     * List all branches
     *
     * @param array $params
     *
     * @return array
     */
    public function all(array $params = []) : array
    {
        return $this->get("{$this->refsUri}/branches", $params);
    }

    /**
     * Get a specific branch
     *
     * @param string $name
     * @param array  $params
     *
     * @return array
     */
    public function show(string $name, array $params = []) : array
    {
        return $this->get("{$this->refsUri}/branches/{$name}", $params);
    }

    /**
     * Remove a specific branch
     *
     * @param string $name
     * @param array  $params
     *
     * @return array
     */
    public function remove(string $name, array $params = []) : array
    {
        return $this->delete("{$this->refsUri}/branches/{$name}", $params);
    }
}
