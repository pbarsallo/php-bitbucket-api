<?php

declare(strict_types=1);

namespace Bitbucket\Api\Repositories\User\Issues\Issue;

use Bitbucket\Api\Repositories\User\Issues\BaseIssuesApi;

/**
 * Base User Repository Issue API Class
 *
 * @author Patrick Barsallo
 */
class BaseIssueApi extends BaseIssuesApi
{
    /**
     * @var string
     */
    protected $issueUri;

    /**
     * Create new base issue API class
     *
     * @param string $issueId
     *
     * @return void
     */
    public function __construct(string $issueId)
    {
        parent::__construct();
        $this->issueUri = "{$this->issuesUri}/{$issueId}";
    }
}
