<?php

declare(strict_types=1);

namespace Bitbucket\Api\Repositories\User\Issues\Issue;

class Watch extends BaseIssueApi
{
    public function update(array $params = [])
    {
        return $this->put("{$this->issueUri}/watch", $params);
    }

    public function show(array $params = [])
    {
        return $this->get("{$this->issueUri}/watch", $params);
    }

    public function remove(array $params = [])
    {
        return $this->delete("{$this->issueUri}/watch", $params);
    }
}
