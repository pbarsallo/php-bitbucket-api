<?php

declare(strict_types=1);

namespace Bitbucket\Api\Users;

class Properties
{
    /**
     * @var string
     */
    private $username;

    public function __construct(string $username)
    {
        $this->username = $username;
    }

    public function update(string $appKey, string $propertyName, array $params)
    {

    }

    public function remove(string $appKey, string $propertyName, array $params = [])
    {

    }

    public function show(string $appKey, string $propertyName, array $params = [])
    {

    }

}
