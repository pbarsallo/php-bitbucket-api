<?php

declare(strict_types=1);

namespace Bitbucket\Api\Repositories\User;

class Commits extends BaseUserApi
{
    public function create(array $params = [])
    {
        return $this->post("{$this->userRepositoryUri}/commits", $params);
    }

    public function all(array $params = [])
    {
        return $this->get("{$this->userRepositoryUri}/commits", $params);
    }

    public function postRevision(string $revision, array $params = [])
    {
        return $this->post("{$this->userRepositoryUri}/commits/{$revision}", $params);
    }

    public function getRevision(string $revision, array $params = [])
    {
        return $this->get("{$this->userRepositoryUri}/commits/{$revision}", $params);
    }
}
