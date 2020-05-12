<?php

declare(strict_types=1);

namespace Bitbucket\Api\Repositories\Workspace;

/**
 * Repository Commits API Class
 * @see https://developer.atlassian.com/bitbucket/api/2/reference/resource/repositories/%7Bworkspace%7D/%7Brepo_slug%7D/commits
 *
 * @author Patrick Barsallo
 */
class Commits extends BaseWorkspaceApi
{
    /**
     * Create a new commit
     *
     * @param array $params
     *
     * @return array
     */
    public function create(array $params = []) : array
    {
        return $this->post("{$this->workspaceRepositoryUri}/commits", $params);
    }

    /**
     * List all commits
     *
     * @param array $params
     *
     * @return array
     */
    public function all(array $params = []) : array
    {
        return $this->get("{$this->workspaceRepositoryUri}/commits", $params);
    }

    /**
     * Create a commit revision
     *
     * @param string $revision
     * @param array  $params
     *
     * @return array
     */
    public function postRevision(string $revision, array $params = []) : array
    {
        return $this->post("{$this->workspaceRepositoryUri}/commits/{$revision}", $params);
    }

    /**
     * Get a specific commit revision
     *
     * @param string $revision
     * @param array  $params
     *
     * @return array
     */
    public function getRevision(string $revision, array $params = []) : array
    {
        return $this->get("{$this->workspaceRepositoryUri}/commits/{$revision}", $params);
    }
}
