<?php

declare(strict_types=1);

namespace Bitbucket\Api\Repositories\User\Issues\Issue;

/**
 * User Repository Issue Changes API Class
 * @see https://developer.atlassian.com/bitbucket/api/2/reference/resource/repositories/%7Busername%7D/%7Brepo_slug%7D/issues/%7Bissue_id%7D/changes
 *
 * @author Patrick Barsallo
 */
class Changes extends BaseIssueApi
{
    /**
     * Create an issue change
     *
     * @param array $params
     *
     * @return array
     */
    public function create(array $params = []) : array
    {
        return $this->post("{$this->issueUri}/changes", $params);
    }

    /**
     * List all issue changes
     *
     * @param array $params
     *
     * @return array
     */
    public function all(array $params = []) : array
    {
        return $this->get("{$this->issueUri}/changes", $params);
    }

    /**
     * Get a specific issue change
     *
     * @param string $changeId
     * @param array  $params
     *
     * @return array
     */
    public function show(string $changeId, array $params = []) : array
    {
        return $this->get("{$this->issueUri}/changes/{$changeId}", $params);
    }
}
