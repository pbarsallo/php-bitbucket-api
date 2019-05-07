<?php

declare(strict_types=1);

namespace Bitbucket\Api\Snippets;

use Bitbucket\Api\Snippets\User\Comments;
use Bitbucket\Api\Snippets\User\Commits;
use Bitbucket\Api\Snippets\User\Diff;
use Bitbucket\Api\Snippets\User\Files;
use Bitbucket\Api\Snippets\User\Node;
use Bitbucket\Api\Snippets\User\Patch;
use Bitbucket\Api\Snippets\User\Watch;
use Bitbucket\Api\Snippets\User\Watchers;

class User
{
    /**
     * @var string
     */
    private $username;

    public function __construct(string $username)
    {
        $this->username = $username;
    }

    public function create(array $params)
    {

    }

    public function all(array $params = [])
    {

    }

    public function comments(string $encodedId)
    {
        return new Comments($this->username, $encodedId);
    }

    public function commits(string $encodedId)
    {
        return new Commits($this->username, $encodedId);
    }

    public function files(string $encodedId)
    {
        return new Files($this->username, $encodedId);
    }

    public function watch(string $encodedId)
    {
        return new Watch($this->username, $encodedId);
    }

    public function watchers(string $encodedId)
    {
        return new Watchers($this->username, $encodedId);
    }

    public function node(string $encodedId)
    {
        return new Node($this->username, $encodedId);
    }

    public function diff(string $encodedId)
    {
        return new Diff($this->username, $encodedId);
    }

    public function patch(string $encodedId)
    {
        return new Patch($this->username, $encodedId);
    }
}
