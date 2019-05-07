<?php

declare(strict_types=1);

namespace Bitbucket\Api\Snippets\User;

use Bitbucket\Api\Snippets\User\Node\Files;

class Node
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

    public function files(string $path)
    {
        return new Files($this->username, $this->encodedId, $path);
    }
}
