<?php

declare(strict_types=1);

namespace Bitbucket\Api\Repositories;

use Bitbucket\Api\Repositories\User\BranchingModel;
use Bitbucket\Api\Repositories\User\BranchRestrictions;
use Bitbucket\Api\Repositories\User\Commit;
use Bitbucket\Api\Repositories\User\Commits;
use Bitbucket\Api\Repositories\User\Components;
use Bitbucket\Api\Repositories\User\DefaultReviewers;
use Bitbucket\Api\Repositories\User\DeployKeys;
use Bitbucket\Api\Repositories\User\Diff;
use Bitbucket\Api\Repositories\User\DiffStat;
use Bitbucket\Api\Repositories\User\Downloads;
use Bitbucket\Api\Repositories\User\FileHistory;
use Bitbucket\Api\Repositories\User\Forks;
use Bitbucket\Api\Repositories\User\Hooks;
use Bitbucket\Api\Repositories\User\Issues;
use Bitbucket\Api\Repositories\User\Milestones;
use Bitbucket\Api\Repositories\User\Patch;
use Bitbucket\Api\Repositories\User\PullRequests;
use Bitbucket\Api\Repositories\User\Refs;
use Bitbucket\Api\Repositories\User\Src;
use Bitbucket\Api\Repositories\User\Versions;
use Bitbucket\Api\Repositories\User\Watchers;

class User
{
    /**
     * @var string
     */
    private $username;

    public function __construct(string $username)
    {
        $this->username = $username;
    }

    public function update(string $repoSlug)
    {

    }

    public function create(string $repoSlug)
    {

    }

    public function show(string $repoSlug, array $params = [])
    {

    }

    public function remove(string $repoSlug, array $params = [])
    {

    }

    public function branchRestrictions(string $repoSlug)
    {
        return new BranchRestrictions($this->username, $repoSlug);
    }

    public function branchingModel(string $repoSlug)
    {
        return new BranchingModel($this->username, $repoSlug);
    }

    public function commit(string $repoSlug)
    {
        return new Commit($this->username, $repoSlug);
    }

    public function commits(string $repoSlug)
    {
        return new Commits($this->username, $repoSlug);
    }

    public function components(string $repoSlug)
    {
        return new Components($this->username, $repoSlug);
    }

    public function defaultReviewers(string $repoSlug)
    {
        return new DefaultReviewers($this->username, $repoSlug);
    }

    public function deployKeys(string $repoSlug)
    {
        return new DeployKeys($this->username, $repoSlug);
    }

    public function diff(string $repoSlug)
    {
        return new Diff($this->username, $repoSlug);
    }

    public function diffStat(string $repoSlug)
    {
        return new DiffStat($this->username, $repoSlug);
    }

    public function downloads(string $repoSlug)
    {
        return new Downloads($this->username, $repoSlug);
    }

    public function fileHistory(string $repoSlug)
    {
        return new FileHistory($this->username, $repoSlug);
    }

    public function forks(string $repoSlug)
    {
        return new Forks($this->username, $repoSlug);
    }

    public function hooks(string $repoSlug)
    {
        return new Hooks($this->username, $repoSlug);
    }

    public function issues(string $repoSlug)
    {
        return new Issues($this->username, $repoSlug);
    }

    public function milestones(string $repoSlug)
    {
        return new Milestones($this->username, $repoSlug);
    }

    public function patch(string $repoSlug)
    {
        return new Patch($this->username, $repoSlug);
    }

    public function pullRequests(string $repoSlug)
    {
        return new PullRequests($this->username, $repoSlug);
    }

    public function refs(string $repoSlug)
    {
        return new Refs($this->username, $repoSlug);
    }

    public function src(string $repoSlug)
    {
        return new Src($this->username, $repoSlug);
    }

    public function versions(string $repoSlug)
    {
        return new Versions($this->username, $repoSlug);
    }

    public function watchers(string $repoSlug)
    {
        return new Watchers($this->username, $repoSlug);
    }
}
