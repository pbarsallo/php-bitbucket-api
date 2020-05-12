<?php

declare(strict_types=1);

namespace Bitbucket\Api\Repositories\Workspace;

use Bitbucket\Api\Repositories\Workspace\Commit\Approval;
use Bitbucket\Api\Repositories\Workspace\Commit\Comments;
use Bitbucket\Api\Repositories\Workspace\Commit\Properties;
use Bitbucket\Api\Repositories\Workspace\Commit\PullRequests;
use Bitbucket\Api\Repositories\Workspace\Commit\Reports;
use Bitbucket\Api\Repositories\Workspace\Commit\Statuses;

/**
 * Repositories Commit API Class
 * @see https://developer.atlassian.com/bitbucket/api/2/reference/resource/repositories/%7Bworkspace%7D/%7Brepo_slug%7D/commit
 *
 * @author Patrick Barsallo
 */
class Commit extends BaseWorkspaceApi
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
        return $this->get("{$this->workspaceRepositoryUri}/commit/{$node}", $params);
    }

    /**
     * Get commit properties API
     *
     * @param string $commit
     *
     * @return Properties
     */
    public function properties(string $commit) : Properties
    {
        return new Properties($commit);
    }

    /**
     * Get commit pull requests API
     *
     * @param string $commit
     *
     * @return PullRequests
     */
    public function pullRequests(string $commit) : PullRequests
    {
        return new PullRequests($commit);
    }

    /**
     * Get commit reports API
     *
     * @param string $commit
     *
     * @return Reports
     */
    public function reports(string $commit) : Reports
    {
        return new Reports($commit);
    }

    /**
     * Get commit approval API
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
     * Get commit comments API
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
     * Get commit statuses API
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
