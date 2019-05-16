<?php

declare(strict_types=1);

namespace Bitbucket\Api\Repositories\User;

class Patch extends BaseUserApi
{
    public function show(string $spec, array $params = [])
    {
        return $this->get("{$this->userRepositoryUri}/patch/{$spec}", $params = []);
    }
}
