<?php

declare(strict_types=1);

namespace Bitbucket\Api;

use Bitbucket\Api\User\Emails;
use Bitbucket\Api\User\Permissions;

class User extends BaseApi
{
    public function show(array $params = [])
    {

    }

    public function emails()
    {
        return new Emails;
    }

    public function permissions()
    {
        return new Permissions;
    }
}
