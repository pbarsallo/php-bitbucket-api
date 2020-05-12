<?php

declare(strict_types=1);

namespace Bitbucket\Api\Repositories\Workspace;

/**
 * User Repository File History API Class
 * @see https://developer.atlassian.com/bitbucket/api/2/reference/resource/repositories/%7Bworkspace%7D/%7Brepo_slug%7D/filehistory
 *
 * @author Patrick Barsallo
 */
class FileHistory extends BaseWorkspaceApi
{
    /**
     * Get history of specific file
     *
     * @param string $node
     * @param string $path
     * @param array  $params
     *
     * @return array
     */
    public function show(string $node, string $path, array $params = []) : array
    {
        return $this->get("{$this->workspaceRepositoryUri}/filehistory/{$node}/{$path}", $params);
    }
}
