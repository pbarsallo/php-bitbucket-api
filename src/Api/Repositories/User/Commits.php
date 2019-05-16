<?php

declare(strict_types=1);

namespace Bitbucket\Api\Repositories\User;

/**
 * User Repository Commits API Class
 * @see https://developer.atlassian.com/bitbucket/api/2/reference/resource/repositories/%7Busername%7D/%7Brepo_slug%7D/commits
 *
 * @author Patrick Barsallo
 */
class Commits extends BaseUserApi
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
        return $this->post("{$this->userRepositoryUri}/commits", $params);
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
        return $this->get("{$this->userRepositoryUri}/commits", $params);
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
        return $this->post("{$this->userRepositoryUri}/commits/{$revision}", $params);
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
        return $this->get("{$this->userRepositoryUri}/commits/{$revision}", $params);
    }
}
