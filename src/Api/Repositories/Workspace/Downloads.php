<?php

declare(strict_types=1);

namespace Bitbucket\Api\Repositories\Workspace;

/**
 * User Repository Downloads API Class
 * @see https://developer.atlassian.com/bitbucket/api/2/reference/resource/repositories/%7Bworkspace%7D/%7Brepo_slug%7D/downloads
 *
 * @author Patrick Barsallo
 */
class Downloads extends BaseWorkspaceApi
{
    /**
     * Upload new download artifacts
     *
     * @param array $params
     *
     * @return array
     */
    public function create(array $params = []) : array
    {
        return $this->post("{$this->workspaceRepositoryUri}/downloads", $params);
    }

    /**
     * List all download links for repository
     *
     * @param array $params
     *
     * @return array
     */
    public function all(array $params = []) : array
    {
        return $this->get("{$this->workspaceRepositoryUri}/downloads", $params);
    }

    /**
     * Get contents of a download artifact
     *
     * @param string $filename
     * @param array  $params
     *
     * @return array
     */
    public function show(string $filename, array $params = []) : array
    {
        return $this->get("{$this->workspaceRepositoryUri}/downloads/{$filename}", $params);
    }

    /**
     * Remove a specific download artifact
     *
     * @param string $filename
     * @param array  $params
     *
     * @return array
     */
    public function remove(string $filename, array $params = []) : array
    {
        return $this->delete("{$this->workspaceRepositoryUri}/downloads/{$filename}", $params);
    }
}
