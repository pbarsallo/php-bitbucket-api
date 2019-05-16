<?php

declare(strict_types=1);

namespace Bitbucket\Api\Addon\Users;

use Bitbucket\Api\Addon\BaseAddonApi;

/**
 * Base Add-On Users API Class
 *
 * @author Patrick Barsallo
 */
class BaseUsersApi extends BaseAddonApi
{
    /**
     * @var string
     */
    protected $targetUserUri;

    /**
     * Create new add-on users API instance
     *
     * @param string $targetUser
     *
     * @return void
     */
    public function __construct(string $targetUser)
    {
        parent::__construct();
        $this->targetUserUri = "{$this->addonUri}/users/{$targetUser}";
    }
}
