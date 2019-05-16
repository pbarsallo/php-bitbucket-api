<?php

declare(strict_types=1);

namespace Bitbucket\Api\Repositories\User\Commit;

class Approval extends BaseCommitApi
{
    public function create(array $params = [])
    {
        return $this->post("{$this->commitUri}/approve", $params);
    }

    public function remove(array $params = [])
    {
        return $this->delete("{$this->commitUri}/approve", $params);
    }
}
