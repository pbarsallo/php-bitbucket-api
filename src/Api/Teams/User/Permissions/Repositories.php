<?php

declare(strict_types=1);

namespace Bitbucket\Api\Teams\User\Permissions;

class Repositories
{
    /**
     * @var string
     */
    private $username;

    public function __construct(string $username)
    {
        $this->username = $username;
    }

    public function all(array $params = [])
    {

    }

    public function show(string $repoSlug, array $params = [])
    {

    }
}
