<?php

declare(strict_types=1);

namespace Bitbucket\Api\Repositories\User;

class Milestones extends BaseUserApi
{
    public function all(array $params = [])
    {
        return $this->get("{$this->userRepositoryUri}/milestones", $params);
    }

    public function show(int $milestoneId, array $params = [])
    {
        return $this->get("{$this->userRepositoryUri}/milestones/{$milestoneId}", $params);
    }
}
