<?php

declare(strict_types=1);

namespace Bitbucket\Api\Repositories\User\Issues\Issue;

class Attachments extends BaseIssueApi
{
    public function create(array $params = [])
    {
        return $this->post("{$this->issueUri}/attachments", $params);
    }

    public function all(array $params = [])
    {
        return $this->get("{$this->issueUri}/attachments", $params);
    }

    public function show(string $path, array $params = [])
    {
        return $this->get("{$this->issueUri}/attachments/{$path}", $params);
    }

    public function remove(string $path, array $params = [])
    {
        return $this->delete("{$this->issueUri}/attachments/{$path}", $params);
    }
}
