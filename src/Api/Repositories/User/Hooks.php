<?php

declare(strict_types=1);

namespace Bitbucket\Api\Repositories\User;

class Hooks extends BaseUserApi
{
    public function create(array $params = [])
    {
        return $this->post("{$this->userRepositoryUri}/hooks", $params);
    }

    public function all(array $params = [])
    {
        return $this->get("{$this->userRepositoryUri}/hooks", $params);
    }

    public function update(string $uid, array $params = [])
    {
        return $this->put("{$this->userRepositoryUri}/hooks/{$uid}", $params);
    }

    public function show(string $uid, array $params = [])
    {
        return $this->get("{$this->userRepositoryUri}/hooks/{$uid}", $params);
    }

    public function remove(string $uid, array $params = [])
    {
        return $this->delete("{$this->userRepositoryUri}/hooks/{$uid}", $params);
    }
}
