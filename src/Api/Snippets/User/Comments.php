<?php

declare(strict_types=1);

namespace Bitbucket\Api\Snippets\User;

/**
 * User Snippet Comments API Class
 * @see https://developer.atlassian.com/bitbucket/api/2/reference/resource/snippets/%7Busername%7D/%7Bencoded_id%7D/comments
 *
 * @author Patrick Barsallo
 */
class Comments extends BaseUserApi
{
    /**
     * Comment on a snippet
     *
     * @param array $params
     *
     * @return array
     */
    public function create(array $params = []) : array
    {
        return $this->post("{$this->userSnippetUri}/comments", $params);
    }

    /**
     * List all comments on a snippet
     *
     * @param array $params
     *
     * @return array
     */
    public function all(array $params = []) : array
    {
        return $this->get("{$this->userSnippetUri}/comments", $params);
    }

    /**
     * Update a comment on a snippet
     *
     * @param string $commentId
     * @param array  $params
     *
     * @return array
     */
    public function update(string $commentId, array $params = []) : array
    {
        return $this->put("{$this->userSnippetUri}/comments/{$commentId}", $params);
    }

    /**
     * Get a specific comment on a snippet
     *
     * @param string $commentId
     * @param array  $params
     *
     * @return array
     */
    public function show(string $commentId, array $params = []) : array
    {
        return $this->get("{$this->userSnippetUri}/comments/{$commentId}", $params);
    }

    /**
     * Delete a comment from a snippet
     *
     * @param string $commentId
     * @param array  $params
     *
     * @return array
     */
    public function remove(string $commentId, array $params = []) : array
    {
        return $this->delete("{$this->userSnippetUri}/comments/{$commentId}", $params);
    }
}
