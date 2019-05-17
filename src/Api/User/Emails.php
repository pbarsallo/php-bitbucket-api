<?php

declare(strict_types=1);

namespace Bitbucket\Api\User;

/**
 * User Emails API Class
 * @see https://developer.atlassian.com/bitbucket/api/2/reference/resource/user/emails
 *
 * @author Patrick Barsallo
 */
class Emails extends BaseUserApi
{
    /**
     * List current user's email addresses
     *
     * @param array $params
     *
     * @return array
     */
    public function all(array $params = []) : array
    {
        return $this->get("{$this->userUri}/emails", $params);
    }

    /**
     * Get details about specific email address
     *
     * @param string $email
     * @param array  $params
     *
     * @return array
     */
    public function show(string $email, array $params = []) : array
    {
        return $this->get("{$this->userUri}/emails/{$email}", $params);
    }
}
