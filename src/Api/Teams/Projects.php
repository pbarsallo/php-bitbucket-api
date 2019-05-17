<?php

declare(strict_types=1);

namespace Bitbucket\Api\Teams;

/**
 * Team Projects API Class
 * @see https://developer.atlassian.com/bitbucket/api/2/reference/resource/teams/%7Busername%7D/projects
 *
 * @author Patrick Barsallo
 */
class Projects extends BaseTeamsApi
{
    /**
     * Create new project for team
     *
     * @param array $params
     *
     * @return array
     */
    public function create(array $params = []) : array
    {
        return $this->post("{$this->teamUri}/projects", $params);
    }

    /**
     * List all projects for team
     *
     * @param array $params
     *
     * @return array
     */
    public function list(array $params = []) : array
    {
        return $this->get("{$this->teamUri}/projects", $params);
    }

    /**
     * Update or create a project for team
     *
     * @param string $projectKey
     * @param array  $params
     *
     * @return array
     */
    public function update(string $projectKey, array $params = []) : array
    {
        return $this->put("{$this->teamUri}/projects/{$projectKey}", $params);
    }

    /**
     * Get a specific project for a team
     *
     * @param string $projectKey
     * @param array  $params
     *
     * @return array
     */
    public function show(string $projectKey, array $params = []) : array
    {
        return $this->get("{$this->teamUri}/projects/{$projectKey}", $params);
    }

    /**
     * Delete a project for a team
     *
     * @param string $projectKey
     * @param array  $params
     *
     * @return array
     */
    public function remove(string $projectKey, array $params = []) : array
    {
        return $this->delete("{$this->teamUri}/projects/{$projectKey}", $params);
    }
}
