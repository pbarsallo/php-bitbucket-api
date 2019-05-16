<?php

declare(strict_types=1);

namespace Bitbucket\Api\Repositories\User\Issues;

/**
 * User Repository Issues Import API Class
 * @see https://developer.atlassian.com/bitbucket/api/2/reference/resource/repositories/%7Busername%7D/%7Brepo_slug%7D/issues/import
 *
 * @author Patrick Barsallo
 */
class Import extends BaseIssuesApi
{
    /**
     * Import an issues archive
     *
     * @param array $params
     *
     * @return array
     */
    public function create(array $params = []) : array
    {
        return $this->post("{$this->issuesUri}/import", $params);
    }

    /**
     * Get issues import status
     *
     * @param array $params
     *
     * @return array
     */
    public function show(array $params = []) : array
    {
        return $this->get("{$this->issuesUri}/import", $params);
    }
}
