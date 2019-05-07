<?php

declare(strict_types=1);

namespace Bitbucket\Api\Repositories\Workspace\PipelinesConfig;

class Variables
{
    /**
     * @var string
     */
    private $workspace;

    /**
     * @var string
     */
    private $repoSlug;

    public function __construct(string $workspace, string $repoSlug)
    {
        $this->workspace = $workspace;
        $this->repoSlug = $repoSlug;
    }

    public function update(string $variableUuid, array $params)
    {

    }

    public function show(string $variableUuid, array $params = [])
    {

    }

    public function remove(string $variableUuid, array $params = [])
    {

    }

}
