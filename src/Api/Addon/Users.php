<?php

declare(strict_types=1);

namespace Bitbucket\Api\Addon;

use Bitbucket\Api\Addon;
use Bitbucket\Api\Addon\Users\Events;
use Bitbucket\Http\HttpClient;

/**
 * Add-On Events API Class
 * @see https://developer.atlassian.com/bitbucket/api/2/reference/resource/addon/users
 *
 * @author Patrick Barsallo
 */
class Users extends Addon
{
    /**
     * Base URI for add-on users API
     */
    const URI = parent::URI . '/users';

    /*
     * @var string
     */
    private $targetUser;

    /**
     * Create an add-on events API instance
     *
     * @param HttpClient $httpClient
     * @param string     $targetUser
     *
     * @return void
     */
    public function __construct(HttpClient $httpClient, string $targetUser)
    {
        parent::__construct($httpClient);
        $this->targetUser = $targetUser;
    }

    /**
     * Get add-on events API
     *
     * @param string $eventKey
     *
     * @return Events
     */
    public function events(string $eventKey) : Events
    {
        return new Events($this->httpClient, $this->targetUser, $eventKey);
    }
}
