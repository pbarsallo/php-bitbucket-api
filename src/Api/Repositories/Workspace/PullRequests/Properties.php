<?php

declare(strict_types=1);

namespace Bitbucket\Api\Repositories\Workspace\PullRequests;

class Properties
{
    /**
     * @var string
     */
    private $workspace;

    /**
     * @var string
     */
    private $repoSlug;

    /**
     * @var string
     */
    private $pullRequestId;

    public function __construct(string $workspace, string $repoSlug, string $pullRequestId)
    {
        $this->workspace = $workspace;
        $this->repoSlug = $repoSlug;
        $this->pullRequestId = $pullRequestId;
    }

    public function update(string $appKey, string $propertyName, array $params)
    {

    }

    public function remove(string $appKey, string $propertyName, array $params = [])
    {

    }

    public function show(string $appKey, string $propertyName, array $params = [])
    {

    }

}
