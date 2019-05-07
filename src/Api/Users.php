<?php

declare(strict_types=1);

namespace Bitbucket\Api;

use Bitbucket\Api\Users\Followers;
use Bitbucket\Api\Users\Following;
use Bitbucket\Api\Users\Hooks;
use Bitbucket\Api\Users\Members;
use Bitbucket\Api\Users\PipelinesConfig;
use Bitbucket\Api\Users\Properties;
use Bitbucket\Api\Users\Repositories;
use Bitbucket\Api\Users\Search;
use Bitbucket\Api\Users\SshKeys;

class Users extends BaseApi
{
    public function show(string $username, array $params = [])
    {

    }

    public function followers(string $username)
    {
        return new Followers($username);
    }

    public function following(string $username)
    {
        return new Following($username);
    }

    public function hooks(string $username)
    {
        return new Hooks($username);
    }

    public function members(string $username)
    {
        return new Members($username);
    }

    public function pipelinesConfig(string $username)
    {
        return new PipelinesConfig($username);
    }

    public function properties(string $username)
    {
        return new Properties($username);
    }

    public function repositories(string $username)
    {
        return new Repositories($username);
    }

    public function search(string $username)
    {
        return new Search($username);
    }

    public function sshKeys(string $username)
    {
        return new SshKeys($username);
    }
}
