<?php

declare(strict_types=1);

namespace Bitbucket\Api\Snippets\User;

use Bitbucket\Api\Snippets\User\Node\Files;

/**
 * User Snippet Node API Class
 * @see https://developer.atlassian.com/bitbucket/api/2/reference/resource/snippets/%7Busername%7D/%7Bencoded_id%7D/%7Bnode_id%7D
 *
 * @author Patrick Barsallo
 */
class Node extends BaseUserApi
{
    /**
     * Update snippet at specific revision
     *
     * @param string $nodeId
     * @param array  $params
     *
     * @return array
     */
    public function update(string $nodeId, array $params = []) : array
    {
        return $this->put("{$this->userSnippetUri}/{$nodeId}", $params);
    }

    /**
     * Get snippet at specific revision
     *
     * @param string $nodeId
     * @param array  $params
     *
     * @return array
     */
    public function show(string $nodeId, array $params = []) : array
    {
        return $this->get("{$this->userSnippetUri}/{$nodeId}", $params);
    }

    /**
     * Delete snippet at specific revision
     *
     * @param string $nodeId
     * @param array  $params
     *
     * @return array
     */
    public function remove(string $nodeId, array $params = []) : array
    {
        return $this->delete("{$this->userSnippetUri}/{$nodeId}", $params);
    }

    /**
     * Get snippet node files API
     *
     * @param string $nodeId
     *
     * @return Files
     */
    public function files(string $nodeId)
    {
        return new Files($nodeId);
    }
}
