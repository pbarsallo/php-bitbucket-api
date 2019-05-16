<?php

declare(strict_types=1);

namespace Bitbucket\Api\Addon;

use Bitbucket\Api\Addon\Users\Events;

/**
 * Add-On Events API Class
 * @see https://developer.atlassian.com/bitbucket/api/2/reference/resource/addon/users
 *
 * @author Patrick Barsallo
 */
class Users extends BaseAddonApi
{
    /**
     * Get add-on events API
     *
     * @param string $targetUser
     *
     * @return Events
     */
    public function events(string $targetUser) : Events
    {
        return new Events($targetUser);
    }
}
