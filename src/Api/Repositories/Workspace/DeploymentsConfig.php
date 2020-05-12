<?php

declare(strict_types=1);

namespace Bitbucket\Api\Repositories\Workspace;

use Bitbucket\Api\Repositories\Workspace\DeploymentsConfig\Variables;

/**
 * Repository Deployments Config API Class
 *
 * @author Patrick Barsallo
 */
class DeploymentsConfig extends BaseWorkspaceApi
{
    /**
     * Get deployments config environment variables API
     *
     * @param string $environmentUuid
     *
     * @return Variables
     */
    public function variables(string $environmentUuid)
    {
        return new Variables($environmentUuid);
    }
}
