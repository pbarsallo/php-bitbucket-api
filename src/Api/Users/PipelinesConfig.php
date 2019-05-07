<?php

declare(strict_types=1);

namespace Bitbucket\Api\Users;

class PipelinesConfig
{
    /**
     * @var string
     */
    private $username;

    public function __construct(string $username)
    {
        $this->username = $username;
    }

    public function update(string $variableUuid, array $params)
    {

    }

    public function show(string $variableUuid, array $params = [])
    {

    }

    public function remove(string $variableUuid, array $params = [])
    {

    }

}
