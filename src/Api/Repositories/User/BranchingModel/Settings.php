<?php

declare(strict_types=1);

namespace Bitbucket\Api\Repositories\User\BranchingModel;

/**
 * Branching model settings class
 *
 * @author Patrick Barsallo
 */
class Settings extends BaseBranchingModelApi
{
    /**
     * Update branching model configuration for a specific repository
     *
     * @param array $params
     *
     * @return array
     */
    public function update(array $params = [])
    {
        return $this->put("{$this->branchingModelUri}/settings", $params);
    }

    /**
     * Get branching model configuration for a specific repository
     *
     * @param array $params
     *
     * @return array
     */
    public function all(array $params = [])
    {
        return $this->get("{$this->branchingModelUri}/settings", $params);
    }
}
