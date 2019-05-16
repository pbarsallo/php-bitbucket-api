<?php

declare(strict_types=1);

namespace Bitbucket\Api\Repositories\User;

use Bitbucket\Api\Repositories\User\BranchingModel\Settings;

/**
 * User repository branching model API class
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
    public function show(array $params = [])
    {
        return $this->get("{$this->userRepositoryUri}/branching-model", $params);
    }

    /**
     * Get branching model settings API
     *
     * @return Settings
     */
    public function settings()
    {
        return new Settings;
    }
}
