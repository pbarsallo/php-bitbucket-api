<?php

declare(strict_types=1);

namespace Bitbucket\Api\Repositories\User;

class Hooks
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

    public function update(string $uid, array $params)
    {

    }

    public function show(string $uid, array $params = [])
    {

    }

    public function remove(string $uid, array $params = [])
    {

    }
}
