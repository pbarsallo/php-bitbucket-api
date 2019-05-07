<?php

declare(strict_types=1);

namespace Bitbucket\Api\Snippets\User;

class Comments
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

    public function create(array $params)
    {

    }

    public function all(array $params = [])
    {

    }

    public function update(string $commentId, array $params)
    {

    }

    public function show(string $commentId, array $params = [])
    {

    }

    public function remove(string $commentId, array $params = [])
    {

    }

}
