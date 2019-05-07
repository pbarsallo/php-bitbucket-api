<?php

declare(strict_types=1);

namespace Bitbucket\Api\Teams;

use Bitbucket\Api\Teams\User\Followers;
use Bitbucket\Api\Teams\User\Following;
use Bitbucket\Api\Teams\User\Hooks;
use Bitbucket\Api\Teams\User\Members;
use Bitbucket\Api\Teams\User\Permissions;
use Bitbucket\Api\Teams\User\PipelinesConfig\Variables;
use Bitbucket\Api\Teams\User\Projects;
use Bitbucket\Api\Teams\User\Repositories;
use Bitbucket\Api\Teams\User\Search;

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

    public function followers()
    {
        return new Followers($this->username);
    }

    public function following()
    {
        return new Following($this->username);
    }

    public function hooks()
    {
        return new Hooks($this->username);
    }

    public function members()
    {
        return new Members($this->username);
    }

    public function permissions()
    {
        return new Permissions($this->username);
    }

    public function pipelinesConfig()
    {
        return new Variables($this->username);
    }

    public function projects()
    {
        return new Projects($this->username);
    }

    public function repositories()
    {
        return new Repositories($this->username);
    }

    public function search()
    {
        return new Search($this->username);
    }
}
