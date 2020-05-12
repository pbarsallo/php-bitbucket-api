<?php

declare(strict_types=1);

namespace Bitbucket\Api\Repositories;

use Bitbucket\Api\Repositories\Workspace\BranchingModel;
use Bitbucket\Api\Repositories\Workspace\BranchRestrictions;
use Bitbucket\Api\Repositories\Workspace\Commit;
use Bitbucket\Api\Repositories\Workspace\Commits;
use Bitbucket\Api\Repositories\Workspace\Components;
use Bitbucket\Api\Repositories\Workspace\DefaultReviewers;
use Bitbucket\Api\Repositories\Workspace\DeployKeys;
use Bitbucket\Api\Repositories\Workspace\Deployments;
use Bitbucket\Api\Repositories\Workspace\DeploymentsConfig;
use Bitbucket\Api\Repositories\Workspace\Diff;
use Bitbucket\Api\Repositories\Workspace\DiffStat;
use Bitbucket\Api\Repositories\Workspace\Downloads;
use Bitbucket\Api\Repositories\Workspace\FileHistory;
use Bitbucket\Api\Repositories\Workspace\Forks;
use Bitbucket\Api\Repositories\Workspace\Hooks;
use Bitbucket\Api\Repositories\Workspace\Issues;
use Bitbucket\Api\Repositories\Workspace\Milestones;
use Bitbucket\Api\Repositories\Workspace\Patch;
use Bitbucket\Api\Repositories\Workspace\PullRequests;
use Bitbucket\Api\Repositories\Workspace\Refs;
use Bitbucket\Api\Repositories\Workspace\Src;
use Bitbucket\Api\Repositories\Workspace\Versions;
use Bitbucket\Api\Repositories\Workspace\Watchers;

/**
 * Workspace Repositories API Class
 * @see https://developer.atlassian.com/bitbucket/api/2/reference/resource/repositories/%7Bworkspace%7D/%7Brepo_slug%7D
 *
 * @author Patrick Barsallo
 */
class Workspace extends BaseRepositoriesApi
{
    /**
     * Update a repository
     *
     * @param string $repoSlug
     * @param array  $params
     *
     * @return array
     */
    public function update(string $repoSlug, array $params = []) : array
    {
        return $this->put("{$this->workspaceRepositoriesUri}/{$repoSlug}", $params);
    }

    /**
     * Create a repository
     *
     * @param string $repoSlug
     * @param array  $params
     *
     * @return array
     */
    public function create(string $repoSlug, array $params = []) : array
    {
        return $this->post("{$this->workspaceRepositoriesUri}/{$repoSlug}", $params);
    }

    /**
     * Get a repository
     *
     * @param string $repoSlug
     * @param array  $params
     *
     * @return array
     */
    public function show(string $repoSlug, array $params = []) : array
    {
        return $this->get("{$this->workspaceRepositoriesUri}/{$repoSlug}", $params);
    }

    /**
     * Remove a repository
     *
     * @param string $repoSlug
     * @param array  $params
     *
     * @return array
     */
    public function remove(string $repoSlug, array $params = []) : array
    {
        return $this->delete("{$this->workspaceRepositoriesUri}/{$repoSlug}", $params);
    }

    /**
     * Get repository branch restrictions API
     *
     * @param string $repoSlug
     *
     * @return BranchRestrictions
     */
    public function branchRestrictions(string $repoSlug) : BranchRestrictions
    {
        return new BranchRestrictions($repoSlug);
    }

    /**
     * Get repository branching model API
     *
     * @param string $repoSlug
     *
     * @return BranchingModel
     */
    public function branchingModel(string $repoSlug) : BranchingModel
    {
        return new BranchingModel($repoSlug);
    }

    /**
     * Get repository commit API
     *
     * @param string $repoSlug
     *
     * @return Commit
     */
    public function commit(string $repoSlug) : Commit
    {
        return new Commit($repoSlug);
    }

    /**
     * Get repository commits API
     *
     * @param string $repoSlug
     *
     * @return Commits
     */
    public function commits(string $repoSlug) : Commits
    {
        return new Commits($repoSlug);
    }

    /**
     * Get repository components API
     *
     * @param string $repoSlug
     *
     * @return Components
     */
    public function components(string $repoSlug) : Components
    {
        return new Components($repoSlug);
    }

    /**
     * Get repository default reviewers API
     *
     * @param string $repoSlug
     *
     * @return DefaultReviewers
     */
    public function defaultReviewers(string $repoSlug) : DefaultReviewers
    {
        return new DefaultReviewers($repoSlug);
    }

    /**
     * Get repository deploy keys API
     *
     * @param string $repoSlug
     *
     * @return DeployKeys
     */
    public function deployKeys(string $repoSlug) : DeployKeys
    {
        return new DeployKeys($repoSlug);
    }

    /**
     * Get repository deployments API
     *
     * @param string $repoSlug
     *
     * @return Deployments
     */
    public function deployments(string $repoSlug) : Deployments
    {
        return new Deployments($repoSlug);
    }

    /**
     * Get repository deployments config API
     *
     * @param string $repoSlug
     *
     * @return DeploymentsConfig
     */
    public function deploymentsConfig(string $repoSlug) : DeploymentsConfig
    {
        return new DeploymentsConfig($repoSlug);
    }

    /**
     * Get repository diff API
     *
     * @param string $repoSlug
     *
     * @return Diff
     */
    public function diff(string $repoSlug) : Diff
    {
        return new Diff($repoSlug);
    }

    /**
     * Get repository diff stat API
     *
     * @param string $repoSlug
     *
     * @return DiffStat
     */
    public function diffStat(string $repoSlug) : DiffStat
    {
        return new DiffStat($repoSlug);
    }

    /**
     * Get repository downloads API
     *
     * @param string $repoSlug
     *
     * @return Downloads
     */
    public function downloads(string $repoSlug) : Downloads
    {
        return new Downloads($repoSlug);
    }

    // TODO: Implement environments

    /**
     * Get repository file history API
     *
     * @param string $repoSlug
     *
     * @return FileHistory
     */
    public function fileHistory(string $repoSlug) : FileHistory
    {
        return new FileHistory($repoSlug);
    }

    /**
     * Get repository forks API
     *
     * @param string $repoSlug
     *
     * @return Forks
     */
    public function forks(string $repoSlug) : Forks
    {
        return new Forks($repoSlug);
    }

    /**
     * Get repository hooks API
     *
     * @param string $repoSlug
     *
     * @return Hooks
     */
    public function hooks(string $repoSlug) : Hooks
    {
        return new Hooks($repoSlug);
    }

    /**
     * Get repository issues API
     *
     * @param string $repoSlug
     *
     * @return Issues
     */
    public function issues(string $repoSlug) : Issues
    {
        return new Issues($repoSlug);
    }

    /**
     * Get repository milestones API
     *
     * @param string $repoSlug
     *
     * @return Milestones
     */
    public function milestones(string $repoSlug) : Milestones
    {
        return new Milestones($repoSlug);
    }

    /**
     * Get repository patch API
     *
     * @param string $repoSlug
     *
     * @return Patch
     */
    public function patch(string $repoSlug) : Patch
    {
        return new Patch($repoSlug);
    }

    // TODO: Implement pipelines

    // TODO: Implement pipelines config

    // TODO: Implement properties

    /**
     * Get repostiroy pull requests API
     *
     * @param string $repoSlug
     *
     * @return PullRequests
     */
    public function pullRequests(string $repoSlug) : PullRequests
    {
        return new PullRequests($repoSlug);
    }

    /**
     * Get repository refs API
     *
     * @param string $repoSlug
     *
     * @return Refs
     */
    public function refs(string $repoSlug) : Refs
    {
        return new Refs($repoSlug);
    }

    /**
     * Get repository src API
     *
     * @param string $repoSlug
     *
     * @return Src
     */
    public function src(string $repoSlug) : Src
    {
        return new Src($repoSlug);
    }

    /**
     * Get repository versions API
     *
     * @param string $repoSlug
     *
     * @return Versions
     */
    public function versions(string $repoSlug) : Versions
    {
        return new Versions($repoSlug);
    }

    /**
     * Get repository watchers API
     *
     * @param string $repoSlug
     *
     * @return Watchers
     */
    public function watchers(string $repoSlug) : Watchers
    {
        return new Watchers($repoSlug);
    }
}
