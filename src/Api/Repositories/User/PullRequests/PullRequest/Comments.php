<?php

declare(strict_types=1);

namespace Bitbucket\Api\Repositories\User\PullRequests\PullRequest;

class Comments extends BasePullRequestApi
{
    public function create(array $params = [])
    {
        return $this->post("{$this->pullRequestUri}/comments", $params);
    }

    public function all(array $params = [])
    {
        return $this->get("{$this->pullRequestUri}/comments", $params);
    }

    public function update(string $commentId, array $params = [])
    {
        return $this->put("{$this->pullRequestUri}/comments/{$commentId}", $params);
    }

    public function show(string $commentId, array $params = [])
    {
        return $this->get("{$this->pullRequestUri}/comments/{$commentId}", $params);
    }

    public function remove(string $commentId, array $params = [])
    {
        return $this->delete("{$this->pullRequestUri}/comments/{$commentId}", $params);
    }
}
