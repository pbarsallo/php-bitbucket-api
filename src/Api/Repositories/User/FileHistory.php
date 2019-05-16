<?php

declare(strict_types=1);

namespace Bitbucket\Api\Repositories\User;

class FileHistory extends BaseUserApi
{
    public function show(string $node, string $path, array $params = [])
    {
        return $this->get("{$this->userRepositoryUri}/filehistory/{$node}/{$path}", $params);
    }
}
