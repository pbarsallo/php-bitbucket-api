<?php

declare(strict_types=1);

namespace Bitbucket\Api\Repositories\Workspace;

use Bitbucket\Api\Repositories\User\PullRequests\Activity;
use Bitbucket\Api\Repositories\User\PullRequests\PullRequest\Approval;
use Bitbucket\Api\Repositories\User\PullRequests\PullRequest\Comments;
use Bitbucket\Api\Repositories\User\PullRequests\PullRequest\Commits;
use Bitbucket\Api\Repositories\User\PullRequests\PullRequest\Declination;
use Bitbucket\Api\Repositories\User\PullRequests\PullRequest\Diff;
use Bitbucket\Api\Repositories\User\PullRequests\PullRequest\DiffStat;
use Bitbucket\Api\Repositories\User\PullRequests\PullRequest\Merge;
use Bitbucket\Api\Repositories\User\PullRequests\PullRequest\Patch;
use Bitbucket\Api\Repositories\User\PullRequests\PullRequest\Statuses;

/**
 * Repository Pull Requests API Class
 * @see https://developer.atlassian.com/bitbucket/api/2/reference/resource/repositories/%7Bworkspace%7D/%7Brepo_slug%7D/pullrequests
 *
 * @author Patrick Barsallo
 */
class PullRequests extends BaseWorkspaceApi
{
    /**
     * Open a new pull request
     *
     * @param array $params
     *
     * @return array
     */
    public function create(array $params = []) : array
    {
        return $this->post("{$this->workspaceRepositoryUri}/pullrequests", $params);
    }

    /**
     * List all pull requests
     *
     * @param array $params
     *
     * @return array
     */
    public function all(array $params = []) : array
    {
        return $this->get("{$this->workspaceRepositoryUri}/pullrequests", $params);
    }

    /**
     * Update a pull request
     *
     * @param string $pullRequestId
     * @param array  $params
     *
     * @return array
     */
    public function update(string $pullRequestId, array $params = []) : array
    {
        return $this->post("{$this->workspaceRepositoryUri}/pullrequests/{$pullRequestId}", $params);
    }

    /**
     * Get a specific pull request
     *
     * @param string $pullRequestId
     * @param array  $params
     *
     * @return array
     */
    public function show(string $pullRequestId, array $params = []) : array
    {
        return $this->post("{$this->workspaceRepositoryUri}/pullrequests/{$pullRequestId}", $params);
    }

    // TODO: Implement properties

    /**
     * Get pull request activity API
     *
     * @return Activity
     */
    public function activity() : Activity
    {
        return new Activity;
    }

    /**
     * Get pull request approval API
     *
     * @param string $pullRequestId
     *
     * @return Approval
     */
    public function approval(string $pullRequestId) : Approval
    {
        return new Approval($pullRequestId);
    }

    /**
     * Get pull request comments API
     *
     * @param string $pullRequestId
     *
     * @return Comments
     */
    public function comments(string $pullRequestId) : Comments
    {
        return new Comments($pullRequestId);
    }

    /**
     * Get pull request commits API
     *
     * @param string $pullRequestId
     *
     * @return Commits
     */
    public function commits(string $pullRequestId) : Commits
    {
        return new Commits($pullRequestId);
    }

    /**
     * Get pull request declination API
     *
     * @param string $pullRequestId
     *
     * @return Declination
     */
    public function declination(string $pullRequestId) : Declination
    {
        return new Declination($pullRequestId);
    }

    /**
     * Get pull request diff API
     *
     * @param string $pullRequestId
     *
     * @return Diff
     */
    public function diff(string $pullRequestId) : Diff
    {
        return new Diff($pullRequestId);
    }

    /**
     * Get pull request diff stat API
     *
     * @param string $pullRequestId
     *
     * @return DiffStat
     */
    public function diffStat(string $pullRequestId) : DiffStat
    {
        return new DiffStat($pullRequestId);
    }

    /**
     * Get pull request merge API
     *
     * @param string $pullRequestId
     *
     * @return Merge
     */
    public function merge(string $pullRequestId) : Merge
    {
        return new Merge($pullRequestId);
    }

    /**
     * Get pull request patch API
     *
     * @param string $pullRequestId
     *
     * @return Patch
     */
    public function patch(string $pullRequestId) : Patch
    {
        return new Patch($pullRequestId);
    }

    /**
     * Get pull request statuses API
     *
     * @param string $pullRequestId
     *
     * @return Statuses
     */
    public function statuses(string $pullRequestId) : Statuses
    {
        return new Statuses($pullRequestId);
    }
}
