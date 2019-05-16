<?php

declare(strict_types=1);

namespace Bitbucket\Api\Repositories\User\Issues;

use Bitbucket\Api\Repositories\User\Issues\Issue\Attachments;
use Bitbucket\Api\Repositories\User\Issues\Issue\Changes;
use Bitbucket\Api\Repositories\User\Issues\Issue\Comments;
use Bitbucket\Api\Repositories\User\Issues\Issue\Vote;
use Bitbucket\Api\Repositories\User\Issues\Issue\Watch;

/**
 * User Repository Issue API Class
 * @see https://developer.atlassian.com/bitbucket/api/2/reference/resource/repositories/%7Busername%7D/%7Brepo_slug%7D/issues/%7Bissue_id%7D
 *
 * @author Patrick Barsallo
 */
class Issue extends BaseIssuesApi
{
    /**
     * Get issue attachments API
     *
     * @param string $issueId
     *
     * @return Attachments
     */
    public function attachments(string $issueId)
    {
        return new Attachments($issueId);
    }

    /**
     * Get issue changes API
     *
     * @param string $issueId
     *
     * @return Changes
     */
    public function changes(string $issueId)
    {
        return new Changes($issueId);
    }

    /**
     * Get issue comments API
     *
     * @param string $issueId
     *
     * @return Comments
     */
    public function comments(string $issueId)
    {
        return new Comments($issueId);
    }

    /**
     * Get issue votes API
     *
     * @param string $issueId
     *
     * @return Vote
     */
    public function vote(string $issueId)
    {
        return new Vote($issueId);
    }

    /**
     * Get issue watch API
     *
     * @param string $issueId
     *
     * @return Watch
     */
    public function watch(string $issueId)
    {
        return new Watch($issueId);
    }
}
