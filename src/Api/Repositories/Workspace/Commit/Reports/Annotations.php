<?php

declare(strict_types=1);

namespace Bitbucket\Api\Repositories\Workspace\Commit\Reports;

/**
 * Commit Report Annotations API Class
 * @see https://developer.atlassian.com/bitbucket/api/2/reference/resource/repositories/%7Bworkspace%7D/%7Brepo_slug%7D/commit/%7Bcommit%7D/reports/%7BreportId%7D/annotations
 *
 * @author Patrick Barsallo
 */
class Annotations extends BaseReportsApi
{
    /**
     * Bulk upload commit report annotations
     *
     * @param array $params
     *
     * @return array
     */
    public function upload(array $params) : array
    {
        return $this->post("{$this->reportUri}/annotations", $params);
    }

    /**
     * Retrieve commit report annotations
     *
     * @param array $params
     *
     * @return array
     */
    public function all(array $params = []): array
    {
        return $this->get("{$this->reportUri}/annotations", $params);
    }

    /**
     * Create/update specific commit report annotation
     *
     * @param string $annotationId
     * @param array  $params
     *
     * @return array
     */
    public function update(string $annotationId, array $params) : array
    {
        return $this->put("{$this->reportId}/annotations/{$annotationId}", $params);
    }

    /**
     * Retrieve specific commit report annotation
     *
     * @param string $annotationId
     * @param array  $params
     *
     * @return array
     */
    public function show(string $annotationId, array $params = []) : array
    {
        return $this->get("{$this->reportId}/annotations/{$annotationId}", $params);
    }

    /**
     * Remove specific commit report annotation
     *
     * @param string $annotationId
     * @param array  $params
     *
     * @return array
     */
    public function remove(string $annotationId, array $params = []) : array
    {
        return $this->delete("{$this->reportId}/annotations/{$annotationId}", $params);
    }
}
