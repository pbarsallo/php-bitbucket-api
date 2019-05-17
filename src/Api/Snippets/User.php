<?php

declare(strict_types=1);

namespace Bitbucket\Api\Snippets;

use Bitbucket\Api\Snippets\User\Comments;
use Bitbucket\Api\Snippets\User\Commits;
use Bitbucket\Api\Snippets\User\Diff;
use Bitbucket\Api\Snippets\User\Files;
use Bitbucket\Api\Snippets\User\Node;
use Bitbucket\Api\Snippets\User\Patch;
use Bitbucket\Api\Snippets\User\Watch;
use Bitbucket\Api\Snippets\User\Watchers;

/**
 * User Snippets API Class
 * @see https://developer.atlassian.com/bitbucket/api/2/reference/resource/snippets/%7Busername%7D
 *
 * @author Patrick Barsallo
 */
class User extends BaseSnippetsApi
{
    /**
     * Create new snippet under specified user account
     *
     * @param array $params
     *
     * @return array
     */
    public function create(array $params = []) : array
    {
        return $this->post($this->userSnippetsUri, $params);
    }

    /**
     * Get snippets owned by specific user
     *
     * @param array $params
     *
     * @return array
     */
    public function all(array $params = [])
    {
        return $this->get($this->userSnippetsUri, $params);
    }

    /**
     * Update a specific snippet
     *
     * @param string $encodedId
     * @param array  $params
     *
     * @return array
     */
    public function update(string $encodedId, array $params = []) : array
    {
        return $this->put("{$this->userSnippetsUri}/{$encodedId}", $params);
    }

    /**
     * Get a specific snippet
     *
     * @param string $encodedId
     * @param array  $params
     *
     * @return array
     */
    public function show(string $encodedId, array $params = []) : array
    {
        return $this->get("{$this->userSnippetsUri}/{$encodedId}", $params);
    }

    /**
     * Delete a specific snippet
     *
     * @param string $encodedId
     * @param array  $params
     *
     * @return array
     */
    public function remove(string $encodedId, array $params = []) : array
    {
        return $this->delete("{$this->userSnippetsUri}/{$encodedId}", $params);
    }

    /**
     * Get snippets comments API
     *
     * @param string $encodedId
     *
     * @return Comments
     */
    public function comments(string $encodedId) : Comments
    {
        return new Comments($encodedId);
    }

    /**
     * Get snippets commits API
     *
     * @param string $encodedId
     *
     * @return Commits
     */
    public function commits(string $encodedId) : Commits
    {
        return new Commits($encodedId);
    }

    /**
     * Get snippets files API
     *
     * @param string $encodedId
     *
     * @return Files
     */
    public function files(string $encodedId) : Files
    {
        return new Files($encodedId);
    }

    /**
     * Get snippets watch API
     *
     * @param string $encodedId
     *
     * @return Watch
     */
    public function watch(string $encodedId) : Watch
    {
        return new Watch($encodedId);
    }

    /**
     * Get snippets watchers API
     *
     * @param string $encodedId
     *
     * @return Watchers
     */
    public function watchers(string $encodedId) : Watchers
    {
        return new Watchers($encodedId);
    }

    /**
     * Get snippets node API
     *
     * @param string $encodedId
     *
     * @return Node
     */
    public function node(string $encodedId) : Node
    {
        return new Node($encodedId);
    }

    /**
     * Get snippets diff API
     *
     * @param string $encodedId
     *
     * @return Diff
     */
    public function diff(string $encodedId) : Diff
    {
        return new Diff($encodedId);
    }

    /**
     * Get snippets patch API
     *
     * @param string $encodedId
     *
     * @return Patch
     */
    public function patch(string $encodedId) : Patch
    {
        return new Patch($encodedId);
    }
}
