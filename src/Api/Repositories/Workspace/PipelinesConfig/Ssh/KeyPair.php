<?php

declare(strict_types=1);

namespace Bitbucket\Api\Repositories\Workspace\PipelinesConfig\Ssh;

/**
 * Workspace Repository Pipelines Config SSH Key Pair API Class
 * @see https://developer.atlassian.com/bitbucket/api/2/reference/resource/repositories/%7Bworkspace%7D/%7Brepo_slug%7D/pipelines_config/ssh/key_pair
 *
 * @author Patrick Barsallo
 */
class KeyPair extends BaseSshApi
{
    /**
     * Create SSH key pair
     *
     * @param array $params
     *
     * @return array
     */
    public function update(array $params = []) : array
    {
        return $this->put("{$this->sshUri}/key_pair", $params);
    }

    /**
     * Get SSH key pair excluding private key
     *
     * @param array $params
     *
     * @return array
     */
    public function show(array $params = []) : array
    {
        return $this->get("{$this->sshUri}/key_pair", $params);
    }

    /**
     * Delete SSH key pair
     *
     * @param array $params
     *
     * @return array
     */
    public function remove(array $params = []) : array
    {
        return $this->delete("{$this->sshUri}/key_pair", $params);
    }
}
