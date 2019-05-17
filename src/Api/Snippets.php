<?php

declare(strict_types=1);

namespace Bitbucket\Api;

use Bitbucket\Api\Snippets\User;

/**
 * Snippets API Class
 * @see https://developer.atlassian.com/bitbucket/api/2/reference/resource/snippets
 *
 * @author Patrick Barsallo
 */
class Snippets extends BaseApi
{
    /**
     * @var string
     */
    private $uri = '/snippets';

    /**
     * Create a new snippet
     *
     * @param array $params
     *
     * @return array
     */
    public function create(array $params = []) : array
    {
        return $this->post($this->uri, $params);
    }

    /**
     * List all snippets
     *
     * @param array $params
     *
     * @return array
     */
    public function all(array $params = []) : array
    {
        return $this->get($this->uri, $params);
    }

    /**
     * Get user snippets API
     *
     * @param string $username
     *
     * @return User
     */
    public function user(string $username) : User
    {
        return new User($username);
    }
}
