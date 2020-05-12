<?php

declare(strict_types=1);

namespace Bitbucket\Api\Repositories\Workspace;

/**
 * Repository source API
 * @see https://developer.atlassian.com/bitbucket/api/2/reference/resource/repositories/%7Bworkspace%7D/%7Brepo_slug%7D/src
 *
 * @author Patrick Barsallo
 */
class Src extends BaseWorkspaceApi
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
        return $this->post("{$this->workspaceRepositoryUri}/src", $params);
    }

    /**
     * List all commits for repository
     *
     * @param array $params
     *
     * @return array
     */
    public function all(array $params = []) : array
    {
        return $this->post("{$this->workspaceRepositoryUri}/src", $params);
    }

    /**
     * Show specific commit contents
     *
     * @param string $node
     * @param string $path
     * @param array  $params
     *
     * @return array
     */
    public function show(string $node, string $path, array $params = []) : array
    {
        return $this->get("{$this->workspaceRepositoryUri}/src/{$node}/{$path}", $params);
    }
}
