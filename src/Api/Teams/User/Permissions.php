<?php

declare(strict_types=1);

namespace Bitbucket\Api\Teams\User;

use Bitbucket\Api\Teams\User\Permissions\Repositories;

class Permissions
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

    public function repositories()
    {
        return new Repositories($this->username);
    }
}
