<?php

declare(strict_types=1);

namespace Bitbucket\Api\Repositories\User\Issues;

class Import
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

    public function show(array $params = [])
    {

    }
}
