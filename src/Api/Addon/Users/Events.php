<?php

declare(strict_types=1);

namespace Bitbucket\Api\Addon\Users;

use Bitbucket\Api\Addon\Users;
use Bitbucket\Http\HttpClient;

/**
 * Add-On Events API Class
 * @see https://developer.atlassian.com/bitbucket/api/2/reference/resource/addon/users/%7Btarget_user%7D/events
 *
 * @author Patrick Barsallo
 */
class Events extends Users
{
    /**
     * @var string
     */
    private $targetUser;

    /**
     * @var string
     */
    private $eventKey;

    /**
     * Create add-on events API instance
     *
     * @param HttpClient $httpClient
     * @param string     $targetUser
     *
     * @return void
     */
    public function __construct(HttpClient $httpClient, string $targetUser, string $eventKey)
    {
        parent::__construct($httpClient, $targetUser);
        $this->targetUser = $targetUser;
        $this->eventKey = $eventKey;
    }

    /**
     * Create a custom add-on event
     *
     * @param array $params
     *
     * @return array
     */
    public function create(array $params) : array
    {
        return $this->post(parent::URI . "/{$this->targetUser}/events/{$this->eventKey}", $params);
    }
}
