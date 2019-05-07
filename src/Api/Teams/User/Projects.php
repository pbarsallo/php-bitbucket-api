<?php

declare(strict_types=1);

namespace Bitbucket\Api\Teams\User;

class Projects
{
    /**
     * @var string
     */
    private $username;

    public function __construct(string $username)
    {
        $this->username = $username;
    }

    public function update(string $projectKey, array $params)
    {

    }

    public function show(string $projectKey, array $params = [])
    {

    }

    public function remove(string $projectKey, array $params = [])
    {

    }

}
