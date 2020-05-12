<?php

declare(strict_types=1);

namespace Bitbucket\Api\Repositories\User\Issues\Issue;

/**
 * User Repository Issue Attachments API Class
 * @see https://developer.atlassian.com/bitbucket/api/2/reference/resource/repositories/%7Busername%7D/%7Brepo_slug%7D/issues/%7Bissue_id%7D/attachments
 *
 * @author Patrick Barsallo
 */
class Attachments extends BaseIssueApi
{
    /**
     * Create a new issue attachment
     *
     * @param array $params
     *
     * @return array
     */
    public function create(array $params = []) : array
    {
        return $this->post("{$this->issueUri}/attachments", $params);
    }

    /**
     * List all issue attachments
     *
     * @param array $params
     *
     * @return array
     */
    public function all(array $params = []) : array
    {
        return $this->get("{$this->issueUri}/attachments", $params);
    }

    /**
     * Get a specific issue attachment
     *
     * @param string $path
     * @param array  $params
     *
     * @return array
     */
    public function show(string $path, array $params = []) : array
    {
        return $this->get("{$this->issueUri}/attachments/{$path}", $params);
    }

    /**
     * Remove a specific issue attachment
     *
     * @param string $path
     * @param array  $params
     *
     * @return array
     */
    public function remove(string $path, array $params = []) : array
    {
        return $this->delete("{$this->issueUri}/attachments/{$path}", $params);
    }
}
