<?php

declare(strict_types=1);

namespace Bitbucket\Api;

use Bitbucket\Api\Teams\User;

class Teams extends BaseApi
{
    public function all(array $params = [])
    {

    }

    public function show(string $username)
    {

    }

    public function user(string $username)
    {
        return new User($username);
    }
}
