<?php

declare(strict_types=1);

namespace Bitbucket\Api;

use Bitbucket\Http\HttpClient;

/**
 * Hook Events API Class
 * @see https://developer.atlassian.com/bitbucket/api/2/reference/resource/hook_events
 *
 * @author Patrick Barsallo
 */
class HookEvents extends BaseApi
{
    /**
     * Base URI for hook events API
     */
    const URI = '/hook_events';

    /**
     * Create new hook events API instance
     *
     * @param HttpClient $httpClient
     *
     * @return void
     */
    public function __construct(HttpClient $httpClient)
    {
        parent::__construct($httpClient);
    }

    /**
     * List webhook resources
     *
     * @param array $params
     *
     * @return array
     */
    public function all(array $params = []) : array
    {
        return $this->get(self::URI, $params);
    }

    /**
     * Get webhooks matching a specific subject type
     *
     * @param string $subjectType
     * @param array  $params
     *
     * @return array
     */
    public function show(string $subjectType, array $params = []) : array
    {
        return $this->get(self::URI . "/{$subjectType}", $params);
    }
}
