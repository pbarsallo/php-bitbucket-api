<?php

declare(strict_types=1);

namespace Bitbucket\Api\Repositories\User\Refs;

class Branches extends BaseRefsApi
{
    public function create(array $params = [])
    {
        return $this->post("{$this->refsUri}/branches", $params);
    }

    public function all(array $params = [])
    {
        return $this->get("{$this->refsUri}/branches", $params);
    }

    public function show(string $name, array $params = [])
    {
        return $this->get("{$this->refsUri}/branches/{$name}", $params);
    }

    public function remove(string $name, array $params = [])
    {
        return $this->delete("{$this->refsUri}/branches/{$name}", $params);
    }
}
