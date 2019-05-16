<?php

declare(strict_types=1);

namespace Bitbucket\Api\Repositories\User;

class DiffStat extends BaseUserApi
{
    public function show(string $spec, array $params = [])
    {
        return $this->get("{$this->userRepositoryUri}/diffstat/{$spec}");
    }
}
