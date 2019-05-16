<?php

declare(strict_types=1);

namespace Bitbucket\Api\Repositories\User\Issues;

use Bitbucket\Api\Repositories\User\Issues\Issue\Attachments;
use Bitbucket\Api\Repositories\User\Issues\Issue\Changes;
use Bitbucket\Api\Repositories\User\Issues\Issue\Comments;
use Bitbucket\Api\Repositories\User\Issues\Issue\Vote;
use Bitbucket\Api\Repositories\User\Issues\Issue\Watch;

class Issue extends BaseIssuesApi
{
    public function attachments(string $issueId)
    {
        return new Attachments($issueId);
    }

    public function changes(string $issueId)
    {
        return new Changes($issueId);
    }

    public function comments(string $issueId)
    {
        return new Comments($issueId);
    }

    public function vote(string $issueId)
    {
        return new Vote($issueId);
    }

    public function watch(string $issueId)
    {
        return new Watch($issueId);
    }
}
