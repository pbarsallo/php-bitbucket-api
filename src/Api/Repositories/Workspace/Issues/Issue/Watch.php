<?php

declare(strict_types=1);

namespace Bitbucket\Api\Repositories\User\Issues\Issue;

/**
 * User Repository Issue Watch API Class
 * @see https://developer.atlassian.com/bitbucket/api/2/reference/resource/repositories/%7Busername%7D/%7Brepo_slug%7D/issues/%7Bissue_id%7D/watch
 *
 * @author Patrick Barsallo
 */
class Watch extends BaseIssueApi
{
    /**
     * Watch an issue
     *
     * @param array $params
     *
     * @return array
     */
    public function update(array $params = []): array
    {
        return $this->put("{$this->issueUri}/watch", $params);
    }

    /**
     * Check if watching an issue
     *
     * @param array $params
     *
     * @return array
     */
    public function show(array $params = []): array
    {
        return $this->get("{$this->issueUri}/watch", $params);
    }

    /**
     * Stop watching an issue
     *
     * @param array $params
     *
     * @return array
     */
    public function remove(array $params = []): array
    {
        return $this->delete("{$this->issueUri}/watch", $params);
    }
}
