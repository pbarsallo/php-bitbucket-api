<?php

declare(strict_types=1);

namespace Bitbucket\Api\Repositories\User\Commit\Statuses;

class Build
{
    /**
     * @var string
     */
    private $username;

    /**
     * @var string
     */
    private $repoSlug;

    /**
     * @var string
     */
    private $node;

    public function __construct(string $username, string $repoSlug, string $node)
    {
        $this->username = $username;
        $this->repoSlug = $repoSlug;
        $this->node = $node;
    }

    public function create(array $params)
    {

    }

    public function update(string $key, array $params)
    {

    }

    public function show(string $key, array $params = [])
    {

    }
}
