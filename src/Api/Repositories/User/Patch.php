<?php

declare(strict_types=1);

namespace Bitbucket\Api\Repositories\User;

/**
 * User Repository Patch API Class
 * @see https://developer.atlassian.com/bitbucket/api/2/reference/resource/repositories/%7Busername%7D/%7Brepo_slug%7D/patch
 *
 * @author Patrick Barsallo
 */
class Patch extends BaseUserApi
{
    /**
     * Get raw patch for a commit
     *
     * @param string $spec
     * @param array  $params
     *
     * @return array
     */
    public function show(string $spec, array $params = []) : array
    {
        return $this->get("{$this->userRepositoryUri}/patch/{$spec}", $params);
    }
}
