<?php

declare(strict_types=1);

namespace Bitbucket\Api\Teams;

use Bitbucket\Api\Teams\PipelinesConfig\Variables;

/**
 * Teams Pipelines Config API Class
 * @see https://developer.atlassian.com/bitbucket/api/2/reference/resource/teams/%7Busername%7D/pipelines_config
 *
 * @author Patrick Barsallo
 */
class PipelinesConfig extends BaseTeamsApi
{
    /**
     * Get pipelines config variables API
     *
     * @return Variables
     */
    public function variables() : Variables
    {
        return new Variables;
    }
}
