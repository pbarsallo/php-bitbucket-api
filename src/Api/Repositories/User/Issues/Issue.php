<?php

declare(strict_types=1);

namespace Bitbucket\Api\Repositories\User\Issues;

use Bitbucket\Api\Repositories\User\Issues\Issue\Attachments;
use Bitbucket\Api\Repositories\User\Issues\Issue\Changes;
use Bitbucket\Api\Repositories\User\Issues\Issue\Comments;
use Bitbucket\Api\Repositories\User\Issues\Issue\Vote;
use Bitbucket\Api\Repositories\User\Issues\Issue\Watch;

class Issue
{
    /**
     * @var string
     */
    private $username;

    /**
     * @var string
     */
    private $repoSlug;

    /**
     * @var string
     */
    private $issueId;

    public function __construct(string $username, string $repoSlug, string $issueId)
    {
        $this->username = $username;
        $this->repoSlug = $repoSlug;
        $this->issueId = $issueId;
    }

    public function attachments()
    {
        return new Attachments($this->username, $this->repoSlug, $this->issueId);
    }

    public function changes()
    {
        return new Changes($this->username, $this->repoSlug, $this->issueId);
    }

    public function comments()
    {
        return new Comments($this->username, $this->repoSlug, $this->issueId);
    }

    public function vote()
    {
        return new Vote($this->username, $this->repoSlug, $this->issueId);
    }

    public function watch()
    {
        return new Watch($this->username, $this->repoSlug, $this->issueId);
    }
}
