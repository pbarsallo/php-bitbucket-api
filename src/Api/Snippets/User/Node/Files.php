<?php

declare(strict_types=1);

namespace Bitbucket\Api\Snippets\User\Node;

/**
 * User Snippet Node Files API Class
 * @see https://developer.atlassian.com/bitbucket/api/2/reference/resource/snippets/%7Busername%7D/%7Bencoded_id%7D/%7Bnode_id%7D/files
 *
 * @author Patrick Barsallo
 */
class Files extends BaseNodeApi
{
    /**
     * Get snippet file contents from specific revision
     *
     * @param string $path
     * @param array  $params
     *
     * @return array
     */
    public function show(string $path, array $params = []) : array
    {
        return $this->get("{$this->nodeUri}/files/{$path}", $params);
    }
}
