<?php

declare(strict_types=1);

namespace Bitbucket\Api;

/**
 * Hook Events API Class
 * @see https://developer.atlassian.com/bitbucket/api/2/reference/resource/hook_events
 *
 * @author Patrick Barsallo
 */
class HookEvents extends BaseApi
{
    /**
     * @var string
     */
    private $hookEventsUri = '/hook_events';

    /**
     * List webhook resources
     *
     * @param array $params
     *
     * @return array
     */
    public function all(array $params = []) : array
    {
        return $this->get($this->hookEventsUri, $params);
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
        return $this->get("{$this->hookEventsUri}/{$subjectType}", $params);
    }
}
