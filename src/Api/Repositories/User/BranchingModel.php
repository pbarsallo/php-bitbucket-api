<?php

declare(strict_types=1);

namespace Bitbucket\Api\Repositories\User;

use Bitbucket\Api\Repositories\User\BranchingModel\Settings;

/**
 * User Repository Branching Model API Class
 * @see https://developer.atlassian.com/bitbucket/api/2/reference/resource/repositories/%7Busername%7D/%7Brepo_slug%7D/branching-model
 *
 * @author Patrick Barsallo
 */
class BranchingModel extends BaseUserApi
{
    /**
     * Get branching model for specific repository
     *
     * @param array $params
     *
     * @return array
     */
    public function show(array $params = []) : array
    {
        return $this->get("{$this->userRepositoryUri}/branching-model", $params);
    }

    /**
     * Get branching model settings API
     *
     * @return Settings
     */
    public function settings() : Settings
    {
        return new Settings;
    }
}
