<?php

declare(strict_types=1);

namespace Bitbucket\Api;

use Bitbucket\Api\Snippets\User;

class Snippets extends BaseApi
{
    public function create(array $params) : array
    {

    }

    public function all(array $params = []) : array
    {

    }

    public function user(string $username) : User
    {
        return new User($username);
    }
}
