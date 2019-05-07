<?php

declare(strict_types=1);

namespace Bitbucket\Api\Repositories\Workspace;

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

    public function __construct(string $workspace, string $repoSlug)
    {
        $this->workspace = $workspace;
        $this->repoSlug = $repoSlug;
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
