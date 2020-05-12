<?php

declare(strict_types=1);

namespace Bitbucket\Api\Repositories\Workspace\BranchingModel;

/**
 * Branching model settings API class
 * @see https://developer.atlassian.com/bitbucket/api/2/reference/resource/repositories/%7Bworkspace%7D/%7Brepo_slug%7D/branching-model/settings
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
    public function update(array $params = []) : array
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
    public function all(array $params = []) : array
    {
        return $this->get("{$this->branchingModelUri}/settings", $params);
    }
}
