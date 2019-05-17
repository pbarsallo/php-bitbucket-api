<?php

declare(strict_types=1);

namespace Bitbucket\Api\Repositories\Workspace;

/**
 * Workspace Repository Properties API Class
 * @see https://developer.atlassian.com/bitbucket/api/2/reference/resource/repositories/%7Bworkspace%7D/%7Brepo_slug%7D/properties
 *
 * @author Patrick Barsallo
 */
class Properties extends BaseWorkspaceApi
{
    /**
     * Update application property value
     *
     * @param string $appKey
     * @param string $propertyName
     * @param array  $params
     *
     * @return array
     */
    public function update(string $appKey, string $propertyName, array $params = []) : array
    {
        return $this->put("{$this->workspaceRepositoryUri}/properties/{$appKey}/{$propertyName}", $params);
    }

    /**
     * Delete application property value
     *
     * @param string $appKey
     * @param string $propertyName
     * @param array  $params
     *
     * @return array
     */
    public function remove(string $appKey, string $propertyName, array $params = []) : array
    {
        return $this->delete("{$this->workspaceRepositoryUri}/properties/{$appKey}/{$propertyName}", $params);
    }

    /**
     * Get application property value
     *
     * @param string $appKey
     * @param string $propertyName
     * @param array  $params
     *
     * @return array
     */
    public function show(string $appKey, string $propertyName, array $params = []) : array
    {
        return $this->get("{$this->workspaceRepositoryUri}/properties/{$appKey}/{$propertyName}", $params);
    }
}
