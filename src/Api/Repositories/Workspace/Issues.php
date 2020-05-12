<?php

declare(strict_types=1);

namespace Bitbucket\Api\Repositories\Workspace;

use Bitbucket\Api\Repositories\Workspace\Issues\Export;
use Bitbucket\Api\Repositories\Workspace\Issues\Import;

/**
 * Repository Issues API Class
 * @see https://developer.atlassian.com/bitbucket/api/2/reference/resource/repositories/%7Bworkspace%7D/%7Brepo_slug%7D/issues
 *
 * @author Patrick Barsallo
 */
class Issues extends BaseWorkspaceApi
{
    /**
     * Create a new issue
     *
     * @param array $params
     *
     * @return array
     */
    public function create(array $params) : array
    {
        return $this->post("{$this->workspaceRepositoryUri}/issues", $params);
    }

    /**
     * List all issues
     *
     * @param array $params
     *
     * @return array
     */
    public function all(array $params = []) : array
    {
        return $this->get("{$this->workspaceRepositoryUri}/issues", $params);
    }

    /**
     * Update an issue
     *
     * @param string $issueId
     * @param array  $params
     *
     * @return array
     */
    public function update(string $issueId, array $params) : array
    {
        return $this->put("{$this->workspaceRepositoryUri}/issues/{$issueId}", $params);
    }

    /**
     * Get a specific issue
     *
     * @param string $issueId
     * @param array  $params
     *
     * @return array
     */
    public function show(string $issueId, array $params = []) : array
    {
        return $this->get("{$this->workspaceRepositoryUri}/issues/{$issueId}", $params);
    }

    /**
     * Remove a specific issue
     *
     * @param string $issueId
     * @param array  $params
     *
     * @return array
     */
    public function remove(string $issueId, array $params = []) : array
    {
        return $this->delete("{$this->workspaceRepositoryUri}/issues/{$issueId}", $params);
    }

    /**
     * Get issue export API
     *
     * @return Export
     */
    public function export() : Export
    {
        return new Export;
    }

    /**
     * Get issue import API
     *
     * @return Import
     */
    public function import() : Import
    {
        return new Import;
    }
}
