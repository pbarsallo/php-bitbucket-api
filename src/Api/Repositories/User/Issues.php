<?php

declare(strict_types=1);

namespace Bitbucket\Api\Repositories\User;

use Bitbucket\Api\Repositories\User\Issues\Export;
use Bitbucket\Api\Repositories\User\Issues\Import;
use Bitbucket\Api\Repositories\User\Issues\Issue;

class Issues
{
    /**
     * @var string
     */
    private $username;

    /**
     * @var string
     */
    private $repoSlug;

    public function __construct(string $username, string $repoSlug)
    {
        $this->username = $username;
        $this->repoSlug = $repoSlug;
    }

    public function create(array $params)
    {

    }

    public function all(array $params = [])
    {

    }

    public function update(string $issueId, array $params)
    {

    }

    public function show(string $issueId, array $params = [])
    {

    }

    public function remove(string $issueId, array $params = [])
    {

    }

    public function export()
    {
        return new Export($this->username, $this->repoSlug);
    }

    public function import()
    {
        return new Import($this->username, $this->repoSlug);
    }

    public function issue($issueId)
    {
        return new Issue($this->username, $this->repoSlug, $issueId);
    }
}
