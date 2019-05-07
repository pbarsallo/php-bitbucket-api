<?php

declare(strict_types=1);

namespace Bitbucket\Api\Repositories\User;

class BranchRestrictions
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

    public function update(string $id, array $params)
    {

    }

    public function show(string $id, array $params = [])
    {

    }

    public function remove(string $id, array $params = [])
    {

    }
}
