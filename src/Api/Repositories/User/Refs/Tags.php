<?php

declare(strict_types=1);

namespace Bitbucket\Api\Repositories\User\Refs;

/**
 * Class Tags
 *
 * @package Bitbucket\Api\Repositories\User\Refs
 */
class Tags extends BaseRefsApi
{
    public function create(array $params = [])
    {
        return $this->post("{$this->refsUri}/tags", $params);
    }

    public function all(array $params = [])
    {
        return $this->get("{$this->refsUri}/tags", $params);
    }

    public function show(string $name, array $params = [])
    {
        return $this->get("{$this->refsUri}/tags/{$name}", $params);
    }

    public function remove(string $name, array $params = [])
    {
        return $this->delete("{$this->refsUri}/tags/{$name}", $params);
    }
}
