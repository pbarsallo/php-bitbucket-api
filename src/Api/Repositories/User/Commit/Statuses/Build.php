<?php

declare(strict_types=1);

namespace Bitbucket\Api\Repositories\User\Commit\Statuses;

class Build extends BaseStatusesApi
{
    public function create(array $params)
    {
        return $this->post("{$this->statusesUri}/build", $params);
    }

    public function update(string $key, array $params)
    {
        return $this->put("{$this->statusesUri}/build/{$key}", $params);
    }

    public function show(string $key, array $params = [])
    {
        return $this->get("{$this->statusesUri}/build/{$key}", $params);
    }
}
