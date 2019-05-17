<?php

declare(strict_types=1);

namespace Bitbucket\Api\Teams;

/**
 * Teams Search API Class
 * @see https://developer.atlassian.com/bitbucket/api/2/reference/resource/teams/%7Busername%7D/search
 *
 * @author Patrick Barsallo\
 */
class Search extends BaseTeamsApi
{
    /**
     * Search team repositories for specified code
     *
     * @param string $query
     * @param array  $params
     *
     * @return array
     */
    public function all(string $query, array $params = []) : array
    {
        return $this->get("{$this->teamUri}/search/code", array_merge($params, ['search_query' => $query]));
    }
}
