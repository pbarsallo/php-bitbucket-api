<?php

declare(strict_types=1);

namespace Bitbucket\Api\Repositories\Workspace\Commit;

use Bitbucket\Api\Repositories\Workspace\Commit\Reports\Annotations;

/**
 * Repository Commit Reports API Class
 * @see https://developer.atlassian.com/bitbucket/api/2/reference/resource/repositories/%7Bworkspace%7D/%7Brepo_slug%7D/commit/%7Bcommit%7D/reports
 *
 * @author Patrick Barsallo
 */
class Reports extends BaseCommitApi
{
    /**
     * Retrieve a list of reports linked to commit
     *
     * @param array $params
     *
     * @return array
     */
    public function all(array $params = []) : array
    {
        return $this->get("{$this->commitUri}/reports", $params);
    }

    /**
     * Create/update report for specified commit
     *
     * @param string $reportId
     * @param array  $params
     *
     * @return array
     */
    public function update(string $reportId, array $params) : array
    {
        return $this->put("{$this->commitUri}/reports/$reportId", $params);
    }

    /**
     * Retrieve report for specified commit
     *
     * @param string $reportId
     * @param array  $params
     *
     * @return array
     */
    public function show(string $reportId, array $params = []) : array
    {
        return $this->get("{$this->commitUri}/reports/$reportId", $params);
    }

    /**
     * Remove report for specified commit
     *
     * @param string $reportId
     * @param array  $params
     *
     * @return array
     */
    public function remove(string $reportId, array $params = []) : array
    {
        return $this->delete("{$this->commitUri}/reports/$reportId", $params);
    }

    /**
     * Get commit report annotations API
     *
     * @param string $reportId
     *
     * @return Annotations
     */
    public function annotations(string $reportId) : Annotations
    {
        return new Annotations($reportId);
    }
}
