<?php

declare(strict_types=1);

namespace Bitbucket\Api\Addon\Users;

/**
 * Add-On Events API Class
 * @see https://developer.atlassian.com/bitbucket/api/2/reference/resource/addon/users/%7Btarget_user%7D/events
 *
 * @author Patrick Barsallo
 */
class Events extends BaseUsersApi
{
    /**
     * Create a custom add-on event
     *
     * @param string $eventKey
     * @param array  $params
     *
     * @return array
     */
    public function fire(string $eventKey, array $params = []) : array
    {
        return $this->post("{$this->targetUserUri}/events/{$eventKey}", $params);
    }
}
