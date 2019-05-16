<?php

declare(strict_types=1);

namespace Bitbucket\Api\Repositories\User\Issues\Issue;

use Bitbucket\Api\Repositories\User\Issues\BaseIssuesApi;

class BaseIssueApi extends BaseIssuesApi
{
    /**
     * @var string
     */
    protected $issueUri;

    public function __construct(string $issueId)
    {
        parent::__construct();
        $this->issueUri = "{$this->issuesUri}/{$issueId}";
    }
}
