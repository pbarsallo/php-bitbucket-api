<?php

declare(strict_types=1);

namespace Bitbucket\Api\Repositories\Workspace\PipelinesConfig\Schedules;

use Bitbucket\Api\Repositories\Workspace\PipelinesConfig\BasePipelinesConfigApi;
use Bitbucket\Api\Repositories\Workspace\PipelinesConfig\Ssh\KeyPair;
use Bitbucket\Api\Repositories\Workspace\PipelinesConfig\Ssh\KnownHosts;

/**
 * Workspace Repostiory Pipelines Config SSH API Class
 * @see https://developer.atlassian.com/bitbucket/api/2/reference/resource/repositories/%7Bworkspace%7D/%7Brepo_slug%7D/pipelines_config/ssh
 *
 * @author Patrick Barsallo
 */
class Ssh extends BasePipelinesConfigApi
{
    /**
     * Get SSH key pair API
     *
     * @return KeyPair
     */
    public function keyPair() : KeyPair
    {
        return new KeyPair;
    }

    /**
     * Get SSH known hosts API
     *
     * @return KnownHosts
     */
    public function knownHosts() : KnownHosts
    {
        return new KnownHosts;
    }
}
