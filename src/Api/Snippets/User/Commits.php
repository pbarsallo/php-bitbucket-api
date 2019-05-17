<?php

declare(strict_types=1);

namespace Bitbucket\Api\Snippets\User;

/**
 * User Snippet Commits API Class
 * @see https://developer.atlassian.com/bitbucket/api/2/reference/resource/snippets/%7Busername%7D/%7Bencoded_id%7D/commits
 *
 * @author Patrick Barsallo
 */
class Commits extends BaseUserApi
{
    /**
     * List all commits made to snippet
     *
     * @param array $params
     *
     * @return array
     */
    public function all(array $params = []) : array
    {
        return $this->get("{$this->userSnippetUri}/commits", $params);
    }

    /**
     * Get specific commit to snippet
     *
     * @param string $revision
     * @param array  $params
     *
     * @return array
     */
    public function show(string $revision, array $params = []) : array
    {
        return $this->get("{$this->userSnippetUri}/commits/{$revision}", $params);
    }
}
