<?php

declare(strict_types=1);

namespace Bitbucket\Api\Repositories\User;

class Downloads
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

    public function show(string $filename, array $params = [])
    {

    }

    public function remove(string $filename, array $params = [])
    {

    }
}
