<?php

declare(strict_types=1);

namespace Bitbucket\Api\Repositories\User;

/**
 * User Repostiory Forks API Class
 * @see https://developer.atlassian.com/bitbucket/api/2/reference/resource/repositories/%7Busername%7D/%7Brepo_slug%7D/forks
 *
 * @author Patrick Barsallo
 */
class Forks extends BaseUserApi
{
    /**
     * Create a new repository fork
     *
     * @param array $params
     *
     * @return array
     */
    public function create(array $params = []) : array
    {
        return $this->post("{$this->userRepositoryUri}/forks", $params);
    }

    /**
     * List all repository forks
     *
     * @param array $params
     *
     * @return array
     */
    public function all(array $params = []) : array
    {
        return $this->get("{$this->userRepositoryUri}/forks", $params);
    }
}
