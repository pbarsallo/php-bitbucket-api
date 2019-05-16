<?php

declare(strict_types=1);

namespace Bitbucket\Api\Repositories\User;

class Forks extends BaseUserApi
{
    public function create(array $params = [])
    {
        return $this->post("{$this->userRepositoryUri}/forks", $params);
    }

    public function all(array $params = [])
    {
        return $this->get("{$this->userRepositoryUri}/forks", $params);
    }
}
