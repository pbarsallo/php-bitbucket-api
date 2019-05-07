<?php

declare(strict_types=1);

namespace Bitbucket\Api\Repositories\Workspace\PipelinesConfig\Ssh;

class KeyPair
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

    public function update(array $params)
    {

    }

    public function show(array $params = [])
    {

    }

    public function remove(array $params = [])
    {

    }

}
