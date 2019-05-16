<?php

declare(strict_types=1);

namespace Bitbucket\Api\Repositories\User\Issues;

class Import extends BaseIssuesApi
{
    public function create(array $params = [])
    {
        return $this->post("{$this->issuesUri}/import", $params);
    }

    public function show(array $params = [])
    {
        return $this->get("{$this->issuesUri}/import", $params);
    }
}
