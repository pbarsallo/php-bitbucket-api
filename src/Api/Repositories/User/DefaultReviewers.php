<?php

declare(strict_types=1);

namespace Bitbucket\Api\Repositories\User;

class DefaultReviewers extends BaseUserApi
{
    public function all(array $params = [])
    {
        return $this->get("{$this->userRepositoryUri}/default-reviewers", $params);
    }

    public function update(string $username, array $params = [])
    {
        return $this->put("{$this->userRepositoryUri}/default-reviewers/{$username}", $params);
    }

    public function show(string $username, array $params = [])
    {
        return $this->get("{$this->userRepositoryUri}/default-reviewers/{$username}", $params);
    }

    public function remove(string $username, array $params = [])
    {
        return $this->delete("{$this->userRepositoryUri}/default-reviewers/{$username}", $params);
    }
}
