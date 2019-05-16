<?php

declare(strict_types=1);

namespace Bitbucket\Api\Repositories\User;

/**
 * User Repository Milestones API Class
 * @see https://developer.atlassian.com/bitbucket/api/2/reference/resource/repositories/%7Busername%7D/%7Brepo_slug%7D/milestones
 *
 * @author Patrick Barsallo
 */
class Milestones extends BaseUserApi
{
    /**
     * List all issue tracker milestones for repository
     *
     * @param array $params
     *
     * @return array
     */
    public function all(array $params = []) : array
    {
        return $this->get("{$this->userRepositoryUri}/milestones", $params);
    }

    /**
     * Get a specified issue tracker milestone
     *
     * @param int   $milestoneId
     * @param array $params
     *
     * @return array
     */
    public function show(int $milestoneId, array $params = []) : array
    {
        return $this->get("{$this->userRepositoryUri}/milestones/{$milestoneId}", $params);
    }
}
