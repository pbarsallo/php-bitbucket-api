<?php

declare(strict_types=1);

namespace Bitbucket\Api\Teams\Permissions;

use Bitbucket\Api\Teams\BaseTeamsApi;

/**
 * Base Team Permissions API Class
 *
 * @author Patrick Barsallo
 */
class BasePermissionsApi extends BaseTeamsApi
{
    /**
     * @var string
     */
    protected $permissionsUri;

    /**
     * Create new base team permissions API instance
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct($this->username);
        $this->permissionsUri = "{$this->teamUri}/permissions";
    }
}
