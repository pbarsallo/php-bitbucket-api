<?php

declare(strict_types=1);

namespace Bitbucket\Api\Repositories\User;

/**
 * Repository source API
 * @see https://developer.atlassian.com/bitbucket/api/2/reference/resource/repositories/%7Busername%7D/%7Brepo_slug%7D/src
 *
 * @author Patrick Barsallo
 */
class Src extends BaseUserApi
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
        return $this->post("{$this->userRepositoryUri}/src", $params);
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
        return $this->post("{$this->userRepositoryUri}/src", $params);
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
        return $this->get("{$this->userRepositoryUri}/src/{$node}/{$path}", $params);
    }
}
