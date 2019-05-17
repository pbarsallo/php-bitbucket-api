<?php

declare(strict_types=1);

namespace Bitbucket\Api\Users;

/**
 * Users Properties API Class
 * @see https://developer.atlassian.com/bitbucket/api/2/reference/resource/users/%7Busername%7D/properties
 *
 * @author Patrick Barsallo
 */
class Properties extends BaseUsersApi
{
    /**
     * Update application property value stored against user
     *
     * @param string $appKey
     * @param string $propertyName
     * @param array  $params
     *
     * @return array
     */
    public function update(string $appKey, string $propertyName, array $params = []) : array
    {
        return $this->put("{$this->userUri}/properties/{$appKey}/{$propertyName}", $params);
    }

    /**
     * Delete application property value stored against user
     *
     * @param string $appKey
     * @param string $propertyName
     * @param array  $params
     *
     * @return array
     */
    public function remove(string $appKey, string $propertyName, array $params = []) : array
    {
        return $this->delete("{$this->userUri}/properties/{$appKey}/{$propertyName}", $params);
    }

    /**
     * Get application property value stored against user
     *
     * @param string $appKey
     * @param string $propertyName
     * @param array  $params
     *
     * @return array
     */
    public function show(string $appKey, string $propertyName, array $params = []) : array
    {
        return $this->get("{$this->userUri}/properties/{$appKey}/{$propertyName}", $params);
    }
}
