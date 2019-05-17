<?php

declare(strict_types=1);

namespace Bitbucket\Api\Users;

/**
 * Users SSH Keys API Class
 * @see https://developer.atlassian.com/bitbucket/api/2/reference/resource/users/%7Busername%7D/ssh-keys
 *
 * @author Patrick Barsallo
 */
class SshKeys extends BaseUsersApi
{
    /**
     * Create new SSH key for user
     *
     * @param array $params
     *
     * @return array
     */
    public function create(array $params) : array
    {
        return $this->post("{$this->userUri}/ssh-keys", $params);
    }

    /**
     * List all SSH keys for user
     *
     * @param array $params
     *
     * @return array
     */
    public function all(array $params = []) : array
    {
        return $this->get("{$this->userUri}/ssh-keys", $params);
    }
}
