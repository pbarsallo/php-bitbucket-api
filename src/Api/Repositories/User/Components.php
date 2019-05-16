<?php

declare(strict_types=1);

namespace Bitbucket\Api\Repositories\User;

class Components extends BaseUserApi
{
    public function all(array $params = [])
    {
        return $this->get("{$this->userRepositoryUri}/components", $params);
    }

    public function show(string $componentId, array $params = [])
    {
        return $this->get("{$this->userRepositoryUri}/components/{$componentId}", $params);
    }
}
