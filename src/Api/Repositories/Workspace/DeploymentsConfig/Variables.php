<?php

declare(strict_types=1);

namespace Bitbucket\Api\Repositories\Workspace\DeploymentsConfig;

/**
 * Deployment Environment Variables API
 * @see https://developer.atlassian.com/bitbucket/api/2/reference/resource/repositories/%7Bworkspace%7D/%7Brepo_slug%7D/deployments_config/environments/%7Benvironment_uuid%7D/variables
 *
 * @author Patrick Barsallo
 */
class Variables extends BaseDeploymentsConfigApi
{
    /**
     * Create new deployment environment variable
     *
     * @param array $params
     *
     * @return array
     */
    public function create(array $params) : array
    {
        return $this->post($this->environmentVariablesUri, $params);
    }

    /**
     * Retrieve deployment environment variables
     *
     * @param array $params
     *
     * @return array
     */
    public function all(array $params = []) : array
    {
        return $this->get($this->environmentVariablesUri, $params);
    }

    /**
     * Update a deployment environment variable
     *
     * @param string $variableUuid
     * @param array  $params
     *
     * @return array
     */
    public function update(string $variableUuid, array $params) : array
    {
        return $this->put("{$this->environmentVariablesUri}/{$variableUuid}", $params);
    }

    /**
     * Remove a deployment environment variable
     *
     * @param string $variableUuid
     * @param array  $params
     *
     * @return array
     */
    public function remove(string $variableUuid, array $params = []) : array
    {
        return $this->delete("{$this->environmentVariablesUri}/{$variableUuid}", $params);
    }
}
