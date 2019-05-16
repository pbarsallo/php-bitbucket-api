<?php

declare(strict_types=1);

namespace Bitbucket\Api\Repositories\User;

/**
 * User Repository Default Reviewers API Class
 * @see https://developer.atlassian.com/bitbucket/api/2/reference/resource/repositories/%7Busername%7D/%7Brepo_slug%7D/default-reviewers
 *
 * @author Patrick Barsallo
 */
class DefaultReviewers extends BaseUserApi
{
    /**
     * List all default reviewers for repository
     *
     * @param array $params
     *
     * @return array
     */
    public function all(array $params = []) : array
    {
        return $this->get("{$this->userRepositoryUri}/default-reviewers", $params);
    }

    /**
     * Add specified user to default reviewers list
     *
     * @param string $username
     * @param array  $params
     *
     * @return array
     */
    public function update(string $username, array $params = []) : array
    {
        return $this->put("{$this->userRepositoryUri}/default-reviewers/{$username}", $params);
    }

    /**
     * Get a specific default reviewer user
     *
     * @param string $username
     * @param array  $params
     *
     * @return array
     */
    public function show(string $username, array $params = []) : array
    {
        return $this->get("{$this->userRepositoryUri}/default-reviewers/{$username}", $params);
    }

    /**
     * Remove a default reviewer
     *
     * @param string $username
     * @param array  $params
     *
     * @return array
     */
    public function remove(string $username, array $params = []) : array
    {
        return $this->delete("{$this->userRepositoryUri}/default-reviewers/{$username}", $params);
    }
}
