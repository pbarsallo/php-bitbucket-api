<?php

declare(strict_types=1);

namespace Bitbucket\Api\Repositories\User;

class Downloads extends BaseUserApi
{
    public function create(array $params = [])
    {
        return $this->post("{$this->userRepositoryUri}/downloads", $params);
    }

    public function all(array $params = [])
    {
        return $this->get("{$this->userRepositoryUri}/downloads", $params);
    }

    public function show(string $filename, array $params = [])
    {
        return $this->get("{$this->userRepositoryUri}/downloads/{$filename}", $params);
    }

    public function remove(string $filename, array $params = [])
    {
        return $this->delete("{$this->userRepositoryUri}/downloads/{$filename}", $params);
    }
}
