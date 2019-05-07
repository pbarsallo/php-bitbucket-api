<?php

declare(strict_types=1);

namespace Bitbucket\Api\Users;

class Followers
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
}
