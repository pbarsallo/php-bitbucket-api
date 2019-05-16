<?php

declare(strict_types=1);

namespace Bitbucket\Api\Repositories\User\Commit;

use Bitbucket\Api\Repositories\User\Commit\Statuses\Build;

/**
 * User Repository Commit Statuses API Class
 * @see https://developer.atlassian.com/bitbucket/api/2/reference/resource/repositories/%7Busername%7D/%7Brepo_slug%7D/commit/%7Bnode%7D/statuses
 *
 * @author Patrick Barsallo
 */
class Statuses extends BaseCommitApi
{
    /**
     * Get all statues for commit
     *
     * @param array $params
     *
     * @return array
     */
    public function all(array $params = []) : array
    {
        return $this->get("{$this->commitUri}/statuses", $params);
    }

    /**
     * Get commit build status API
     *
     * @return Build
     */
    public function build() : Build
    {
        return new Build;
    }
}
