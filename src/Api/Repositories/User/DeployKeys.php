<?php

declare(strict_types=1);

namespace Bitbucket\Api\Repositories\User;

class DeployKeys extends BaseUserApi
{
    public function create(array $params = [])
    {
        return $this->post("{$this->userRepositoryUri}/deploy-keys", $params);
    }

    public function all(array $params = [])
    {
        return $this->get("{$this->userRepositoryUri}/deploy-keys", $params);
    }

    public function update(string $keyId, array $params = [])
    {
        return $this->put("{$this->userRepositoryUri}/deploy-keys/{$keyId}", $params);
    }

    public function show(string $keyId, array $params = [])
    {
        return $this->get("{$this->userRepositoryUri}/deploy-keys/{$keyId}", $params);
    }

    public function remove(string $keyId, array $params = [])
    {
        return $this->delete("{$this->userRepositoryUri}/deploy-keys/{$keyId}", $params);
    }
}
