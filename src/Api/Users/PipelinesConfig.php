<?php

declare(strict_types=1);

namespace Bitbucket\Api\Users;

/**
 * Users Pipelines Config API Class
 * @see https://developer.atlassian.com/bitbucket/api/2/reference/resource/users/%7Busername%7D/pipelines_config
 *
 * @author Patrick Barsallo
 */
class PipelinesConfig extends BaseUsersApi
{
    /**
     * user level variable
     *
     * @param string $variableUuid
     * @param array  $params
     *
     * @return array
     */
    public function update(string $variableUuid, array $params = []) : array
    {
        return $this->put("{$this->userUri}/pipelines_config/variables/{$variableUuid}", $params);
    }

    /**
     * Get user level variable
     *
     * @param string $variableUuid
     * @param array  $params
     *
     * @return array
     */
    public function show(string $variableUuid, array $params = []) : array
    {
        return $this->get("{$this->userUri}/pipelines_config/variables/{$variableUuid}", $params);
    }

    /**
     * Delete user level variable
     *
     * @param string $variableUuid
     * @param array  $params
     *
     * @return array
     */
    public function remove(string $variableUuid, array $params = []) : array
    {
        return $this->delete("{$this->userUri}/pipelines_config/variables/{$variableUuid}", $params);
    }
}
