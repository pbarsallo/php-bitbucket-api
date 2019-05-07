<?php

declare(strict_types=1);

namespace Bitbucket\Api\Teams\User\PipelinesConfig;

class Variables
{
    /**
     * @var string
     */
    private $username;

    public function __construct(string $username)
    {
        $this->username = $username;
    }

    public function update(string $variableUUid, array $params)
    {

    }

    public function show(string $variableUUid, array $params = [])
    {

    }

    public function remove(string $variableUUid, array $params = [])
    {

    }

}
