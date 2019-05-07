<?php

declare(strict_types=1);

namespace Bitbucket\Api\Snippets\User;

class Watchers
{
    /**
     * @var string
     */
    private $username;

    /**
     * @var string
     */
    private $encodedId;

    public function __construct(string $username, string $encodedId)
    {
        $this->username = $username;
        $this->encodedId = $encodedId;
    }

    public function all(array $params = [])
    {

    }
}
