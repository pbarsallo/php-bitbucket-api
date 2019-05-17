<?php

declare(strict_types=1);

namespace Bitbucket\Api\Teams;

use Bitbucket\Api\BaseApi;

/**
 * Base Team User API Class
 *
 * @author Patrick Barsallo
 */
class BaseTeamsApi extends BaseApi
{
    /**
     * @var string
     */
    protected $username;

    /**
     * @var string
     */
    protected $teamUri;

    /**
     * Create new base user API instance
     *
     * @param string $username
     *
     * @return void
     */
    public function __construct(string $username)
    {
        parent::__construct($this->httpClient);
        $this->username = $username;
        $this->teamUri = "/teams/{$username}";
    }
}
