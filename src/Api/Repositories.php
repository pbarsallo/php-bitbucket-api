<?php

declare(strict_types=1);

namespace Bitbucket\Api;

use Bitbucket\Api\Repositories\User;
use Bitbucket\Api\Repositories\Workspace;

class Repositories extends BaseApi
{
    public function all(array $params = [])
    {

    }

    public function show(string $username, array $params = [])
    {

    }

    public function user(string $username)
    {
        return new User($username);
    }

    public function workspace(string $workspace)
    {
        return new Workspace($workspace);
    }
}
