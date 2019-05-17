<?php

declare(strict_types=1);

namespace Bitbucket\Api\Repositories\Workspace\PipelinesConfig\Ssh;

/**
 * Workspace Repository Pipelines Config SSH Known Hosts API Class
 * @see https://developer.atlassian.com/bitbucket/api/2/reference/resource/repositories/%7Bworkspace%7D/%7Brepo_slug%7D/pipelines_config/ssh/known_hosts
 *
 * @author Patrick Barsallo
 */
class KnownHosts extends BaseSshApi
{
    /**
     * Update repository level known host
     *
     * @param array $params
     *
     * @return array
     */
    public function update(string $knownHostUuid, array $params = []) : array
    {
        return $this->put("{$this->sshUri}/known_hosts/{$knownHostUuid}", $params);
    }

    /**
     * Get repository level known host
     *
     * @param array $params
     *
     * @return array
     */
    public function show(string $knownHostUuid, array $params = []) : array
    {
        return $this->put("{$this->sshUri}/known_hosts/{$knownHostUuid}", $params);
    }

    /**
     * Remove known host
     *
     * @param array $params
     *
     * @return array
     */
    public function remove(string $knownHostUuid, array $params = []) : array
    {
        return $this->put("{$this->sshUri}/known_hosts/{$knownHostUuid}", $params);
    }
}
