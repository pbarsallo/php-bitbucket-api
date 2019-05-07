<?php

declare(strict_types=1);

namespace Bitbucket\Api\Repositories\User;

use Bitbucket\Api\Repositories\User\Refs\Branches;
use Bitbucket\Api\Repositories\User\Refs\Tags;

class Refs
{
    /**
     * @var string
     */
    private $username;

    /**
     * @var string
     */
    private $repoSlug;

    public function __construct(string $username, string $repoSlug)
    {
        $this->username = $username;
        $this->repoSlug = $repoSlug;
    }

    public function all(array $params = [])
    {

    }

    public function branches()
    {
        return new Branches($this->username, $this->repoSlug);
    }

    public function tags()
    {
        return new Tags($this->username, $this->repoSlug);
    }
}
