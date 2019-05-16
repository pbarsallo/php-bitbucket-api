<?php

declare(strict_types=1);

namespace Bitbucket\Api\Repositories\User\Commit;

use Bitbucket\Api\Repositories\User\Commit\Statuses\Build;

class Statuses extends BaseCommitApi
{
    public function all(array $params = [])
    {
        return $this->get("{$this->commitUri}/statuses", $params);
    }

    public function build()
    {
        return new Build;
    }
}
