<?php

declare(strict_types=1);

namespace Bitbucket\Api\Repositories\User;

use Bitbucket\Api\Repositories\User\Commit\Approval;
use Bitbucket\Api\Repositories\User\Commit\Comments;
use Bitbucket\Api\Repositories\User\Commit\Statuses;

/**
 * User Repositories Commit API Class
 * @see https://developer.atlassian.com/bitbucket/api/2/reference/resource/repositories/%7Busername%7D/%7Brepo_slug%7D/commit
 *
 * @author Patrick Barsallo
 */
class Commit extends BaseUserApi
{
    /**
     * Get specified commit
     *
     * @param string $node
     * @param array  $params
     *
     * @return array
     */
    public function show(string $node, array $params = []) : array
    {
        return $this->get("{$this->userRepositoryUri}/commit/{$node}", $params);
    }

    /**
     * Get user repositories approval API
     *
     * @param string $node
     *
     * @return Approval
     */
    public function approval(string $node) : Approval
    {
        return new Approval($node);
    }

    /**
     * Get user repositories comments API
     *
     * @param string $node
     *
     * @return Comments
     */
    public function comments(string $node) : Comments
    {
        return new Comments($node);
    }

    /**
     * Get user repositories statuses API
     *
     * @param string $node
     *
     * @return Statuses
     */
    public function statuses(string $node) : Statuses
    {
        return new Statuses($node);
    }
}
