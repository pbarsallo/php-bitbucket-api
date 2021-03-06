<?php

declare(strict_types=1);

namespace Bitbucket\Api\Repositories\Workspace;

/**
 * Repository Branch Restrictions API Class
 * @see https://developer.atlassian.com/bitbucket/api/2/reference/resource/repositories/%7Bworkspace%7D/%7Brepo_slug%7D/branch-restrictions
 *
 * @author Patrick Barsallo
 */
class BranchRestrictions extends BaseWorkspaceApi
{
    /**
     * Create branch restriction rule
     *
     * @param array $params
     *
     * @return array
     */
    public function create(array $params = []) : array
    {
        return $this->post("{$this->workspaceRepositoryUri}/branch-restrictions", $params);
    }

    /**
     * List all branch restrictions for repository
     *
     * @param array $params
     *
     * @return array
     */
    public function all(array $params = []) : array
    {
        return $this->get("{$this->workspaceRepositoryUri}/branch-restrictions", $params);
    }

    /**
     * Update an existing branch restriction rule
     *
     * @param string $id
     * @param array  $params
     *
     * @return array
     */
    public function update(string $id, array $params = []) : array
    {
        return $this->put("{$this->workspaceRepositoryUri}/branch-restrictions/{$id}", $params);
    }

    /**
     * Show specific branch restriction
     *
     * @param string $id
     * @param array  $params
     *
     * @return array
     */
    public function show(string $id, array $params = []) : array
    {
        return $this->get("{$this->workspaceRepositoryUri}/branch-restrictions/{$id}", $params);
    }

    /**
     * Remove a specific branch restriction
     *
     * @param string $id
     * @param array  $params
     *
     * @return array
     */
    public function remove(string $id, array $params = []) : array
    {
        return $this->delete("{$this->workspaceRepositoryUri}/branch-restrictions/{$id}", $params);
    }
}
