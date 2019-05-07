<?php

declare(strict_types=1);

namespace Bitbucket\Api;

use Bitbucket\Api\Snippets\User;

class Snippets extends BaseApi
{
    public function create(array $params)
    {

    }

    public function all(array $params = [])
    {

    }

    public function user(string $username)
    {
        return new User($username);
    }
}
