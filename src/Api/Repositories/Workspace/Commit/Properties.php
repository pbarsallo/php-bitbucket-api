<?php

declare(strict_types=1);

namespace Bitbucket\Api\Repositories\Workspace\Commit;

/**
 * Workspace Repository Commit Properties API Class
 * @see https://developer.atlassian.com/bitbucket/api/2/reference/resource/repositories/%7Bworkspace%7D/%7Brepo_slug%7D/commit/%7Bcommit%7D/properties
 *
 * @author Patrick Barsallo
 */
class Properties extends BaseCommitApi
{
    /**
     * Update application property value stored against commit
     *
     * @param string $appKey
     * @param string $propertyName
     * @param array  $params
     *
     * @return array
     */
    public function update(string $appKey, string $propertyName, array $params = []) : array
    {
        return $this->put("{$this->commitUri}/properties/{$appKey}/{$propertyName}", $params);
    }

    /**
     * Remove application property value stored against commit
     *
     * @param string $appKey
     * @param string $propertyName
     * @param array  $params
     *
     * @return array
     */
    public function remove(string $appKey, string $propertyName, array $params = []) : array
    {
        return $this->delete("{$this->commitUri}/properties/{$appKey}/{$propertyName}", $params);
    }

    /**
     * Get application property value stored against commit
     *
     * @param string $appKey
     * @param string $propertyName
     * @param array  $params
     *
     * @return array
     */
    public function show(string $appKey, string $propertyName, array $params = []) : array
    {
        return $this->get("{$this->commitUri}/properties/{$appKey}/{$propertyName}", $params);
    }
}
