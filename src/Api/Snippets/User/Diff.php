<?php

declare(strict_types=1);

namespace Bitbucket\Api\Snippets\User;

/**
 * User Snippet Diff API Class
 * @see https://developer.atlassian.com/bitbucket/api/2/reference/resource/snippets/%7Busername%7D/%7Bencoded_id%7D/%7Brevision%7D/diff
 *
 * @author Patrick Barsallo
 */
class Diff extends BaseUserApi
{
    /**
     * Get diff of snippet at specified commit
     *
     * @param string $revision
     * @param array  $params
     *
     * @return array
     */
    public function show(string $revision, array $params = []) : array
    {
        return $this->get("{$this->userSnippetUri}/{$revision}/diff", $params);
    }
}
