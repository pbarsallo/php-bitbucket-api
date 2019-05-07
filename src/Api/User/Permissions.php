<?php

declare(strict_types=1);

namespace Bitbucket\Api\User;

use Bitbucket\Api\User\Permissions\Repositories;
use Bitbucket\Api\User\Permissions\Teams;

class Permissions
{
    public function repositories()
    {
        return new Repositories;
    }

    public function teams()
    {
        return new Teams;
    }
}
