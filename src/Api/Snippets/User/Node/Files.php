<?php

declare(strict_types=1);

namespace Bitbucket\Api\Snippets\User\Node;

class Files
{
    /**
     * @var string
     */
    private $username;

    /**
     * @var string
     */
    private $encodedId;

    /**
     * @var string
     */
    private $path;

    public function __construct(string $username, string $encodedId, string $path)
    {
        $this->username = $username;
        $this->encodedId = $encodedId;
        $this->path = $path;
    }

    public function show(array $params = [])
    {

    }
}
