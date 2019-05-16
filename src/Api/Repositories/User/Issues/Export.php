<?php

declare(strict_types=1);

namespace Bitbucket\Api\Repositories\User\Issues;

/**
 * User Repository Issues Export API Class
 * @see https://developer.atlassian.com/bitbucket/api/2/reference/resource/repositories/%7Busername%7D/%7Brepo_slug%7D/issues/export
 *
 * @author Patrick Barsallo
 */
class Export extends BaseIssuesApi
{
    /**
     * Initiate a new issues archive
     *
     * @param array $params
     *
     * @return array
     */
    public function create(array $params = []) : array
    {
        return $this->post("{$this->issuesUri}/export", $params);
    }

    /**
     * Get issues export
     *
     * @param string $repositoryName
     * @param string $taskId
     * @param array  $params
     *
     * @return array
     */
    public function show(string $repositoryName, string $taskId, array $params = []) : array
    {
        return $this->get("{$this->issuesUri}/export/{$repositoryName}-issues-{$taskId}.zip", $params);
    }
}
