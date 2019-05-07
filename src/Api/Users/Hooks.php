<?php

declare(strict_types=1);

namespace Bitbucket\Api\Users;

class Hooks
{
    /**
     * @var string
     */
    private $username;

    public function __construct(string $username)
    {
        $this->username = $username;
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
