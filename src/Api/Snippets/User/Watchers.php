<?php

declare(strict_types=1);

namespace Bitbucket\Api\Snippets\User;

/**
 * User Snippet Watchers API Class
 * @see https://developer.atlassian.com/bitbucket/api/2/reference/resource/snippets/%7Busername%7D/%7Bencoded_id%7D/watchers
 *
 * @author Patrick Barsallo
 */
class Watchers extends BaseUserApi
{
    /**
     * List all watchers of a snippet
     *
     * @param array $params
     *
     * @return array
     */
    public function all(array $params = []) : array
    {
        return $this->get("{$this->userSnippetUri}/watchers", $params);
    }
}
