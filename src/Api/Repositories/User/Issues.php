<?php

declare(strict_types=1);

namespace Bitbucket\Api\Repositories\User;

use Bitbucket\Api\Repositories\User\Issues\Export;
use Bitbucket\Api\Repositories\User\Issues\Import;
use Bitbucket\Api\Repositories\User\Issues\Issue;

class Issues extends BaseUserApi
{
    public function create(array $params = [])
    {
        return $this->post("{$this->userRepositoryUri}/issues", $params);
    }

    public function all(array $params = [])
    {
        return $this->get("{$this->userRepositoryUri}/issues", $params);
    }

    public function update(string $issueId, array $params = [])
    {
        return $this->put("{$this->userRepositoryUri}/issues/{$issueId}", $params);
    }

    public function show(string $issueId, array $params = [])
    {
        return $this->get("{$this->userRepositoryUri}/issues/{$issueId}", $params);
    }

    public function remove(string $issueId, array $params = [])
    {
        return $this->delete("{$this->userRepositoryUri}/issues/{$issueId}", $params);
    }

    public function export()
    {
        return new Export;
    }

    public function import()
    {
        return new Import;
    }

    public function issue()
    {
        return new Issue;
    }
}
