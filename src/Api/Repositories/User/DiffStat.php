<?php

declare(strict_types=1);

namespace Bitbucket\Api\Repositories\User;

/**
 * User Repository Diff Stat API Class
 * @see https://developer.atlassian.com/bitbucket/api/2/reference/resource/repositories/%7Busername%7D/%7Brepo_slug%7D/diffstat
 *
 * @author Patrick Barsallo
 */
class DiffStat extends BaseUserApi
{
    /**
     * Get diff stat for a specific commit
     *
     * @param string $spec
     * @param array  $params
     *
     * @return array
     */
    public function show(string $spec, array $params = []) : array
    {
        return $this->get("{$this->userRepositoryUri}/diffstat/{$spec}", $params);
    }
}
