<?php

declare(strict_types=1);

namespace Bitbucket\Api\Repositories\User;

class FileHistory
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

    public function show(string $node, string $path, array $params = [])
    {

    }
}
