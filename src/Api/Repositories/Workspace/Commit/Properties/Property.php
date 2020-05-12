<?php

declare(strict_types=1);

namespace Bitbucket\Api\Repositories\Workspace\Commit\Properties;

/**
 * Commit property API class
 * @see https://developer.atlassian.com/bitbucket/api/2/reference/resource/repositories/%7Bworkspace%7D/%7Brepo_slug%7D/commit/%7Bcommit%7D/properties/%7Bapp_key%7D/%7Bproperty_name%7D
 *
 * @author Patrick Barsallo
 */
class Property extends BasePropertiesApi
{
    /**
     * Update an application property value stored against a commit
     *
     * @param string $propertyName
     * @param array  $params
     *
     * @return array
     */
    public function update(string $propertyName, array $params) : array
    {
        return $this->put("{$this->propertiesUri}/{$propertyName}", $params);
    }

    /**
     * Remove an application property value stored against a commit
     *
     * @param string $propertyName
     * @param array  $params
     *
     * @return array
     */
    public function remove(string $propertyName, array $params = []) : array
    {
        return $this->delete("{$this->propertiesUri}/{$propertyName}", $params);
    }

    /**
     * Retrieve an application property value stored against a commit
     *
     * @param string $propertyName
     * @param array  $params
     *
     * @return array
     */
    public function show(string $propertyName, array $params = []) : array
    {
        return $this->get("{$this->propertiesUri}/{$propertyName}", $params);
    }
}
