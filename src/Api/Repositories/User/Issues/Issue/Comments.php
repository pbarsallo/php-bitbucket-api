<?php

declare(strict_types=1);

namespace Bitbucket\Api\Repositories\User\Issues\Issue;

class Comments extends BaseIssueApi
{
    public function create(array $params = [])
    {
        return $this->post("{$this->issueUri}/comments", $params);
    }

    public function all(array $params = [])
    {
        return $this->get("{$this->issueUri}/comments", $params);
    }

    public function update(string $commentId, array $params = [])
    {
        return $this->put("{$this->issueUri}/comments/{$commentId}", $params);
    }

    public function show(string $commentId, array $params = [])
    {
        return $this->get("{$this->issueUri}/comments/{$commentId}", $params);
    }

    public function remove(string $commentId, array $params = [])
    {
        return $this->delete("{$this->issueUri}/comments/{$commentId}", $params);
    }
}
