<?php

declare(strict_types=1);

namespace Bitbucket\Api\Snippets\User;

/**
 * User Snippet Watch API Class
 * @see https://developer.atlassian.com/bitbucket/api/2/reference/resource/snippets/%7Busername%7D/%7Bencoded_id%7D/watch
 *
 * @author Patrick Barsallo
 */
class Watch extends BaseUserApi
{
    /**
     * Watch a snippet
     *
     * @param array $params
     *
     * @return array
     */
    public function update(array $params = []) : array
    {
        return $this->put("{$this->userSnippetUri}/watch", $params);
    }

    /**
     * Check watch status for a snippet
     *
     * @param array $params
     *
     * @return array
     */
    public function show(array $params = []) : array
    {
        return $this->get("{$this->userSnippetUri}/watch", $params);
    }

    /**
     * Stop watching a snippet
     *
     * @param array $params
     *
     * @return array
     */
    public function remove(array $params = []) : array
    {
        return $this->delete("{$this->userSnippetUri}/watch", $params);
    }
}
