<?php

declare(strict_types=1);

namespace Bitbucket\Api\Addon;

use Bitbucket\Api\Addon;
use Bitbucket\Api\Addon\Linkers\Values;
use Bitbucket\Http\HttpClient;

/**
 * Linkers API class
 * @see https://developer.atlassian.com/bitbucket/api/2/reference/resource/addon/linkers
 *
 * @author Patrick Barsallo
 */
class Linkers extends Addon
{
    /**
     * Base URI for linkers API
     */
    const URI = parent::URI . '/linkers';

    /**
     * Create Linkers API instance
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
     * List all add-on linkers
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
     * Get a specific add-on linker
     *
     * @param string $linkerKey
     * @param array  $params
     *
     * @return array
     */
    public function show(string $linkerKey, array $params = []) : array
    {
        return $this->get(self::URI . "/$linkerKey");
    }

    /**
     * Get linker values API
     *
     * @param string $linkerKey
     *
     * @return Values
     */
    public function values(string $linkerKey) : Values
    {
        return new Values($this->httpClient, $linkerKey);
    }
}
