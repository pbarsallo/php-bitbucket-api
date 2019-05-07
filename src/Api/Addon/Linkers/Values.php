<?php

declare(strict_types=1);

namespace Bitbucket\Api\Addon\Linkers;

use Bitbucket\Api\Addon\Linkers;
use Bitbucket\Http\HttpClient;

/**
 * Linker Values API
 * @see https://developer.atlassian.com/bitbucket/api/2/reference/resource/addon/linkers/%7Blinker_key%7D/values
 *
 * @author Patrick Barsallo
 */
class Values extends Linkers
{
    /**
     * Base URI for linker values API
     */
    const URI = parent::URI . '/values';

    /**
     * @var string
     */
    private $linkerKey;

    /**
     * Create add-on values API instance
     *
     * @param HttpClient $httpClient
     * @param string     $linkerKey
     *
     * @return void
     */
    public function __construct(HttpClient $httpClient, string $linkerKey)
    {
        parent::__construct($httpClient);
        $this->linkerKey = $linkerKey;
    }

    /**
     * Update value for linker key
     *
     * @param array $params
     *
     * @return array
     */
    public function update(array $params) : array
    {
        return $this->put(self::URI, $params);
    }

    /**
     * Create value for linker key
     *
     * @param array $params
     *
     * @return array
     */
    public function create(array $params) : array
    {
        return $this->post(self::URI, $params);
    }

    /**
     * Get all values for linker key
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
     * Delete a value for linker key
     *
     * @param array $params
     *
     * @return array
     */
    public function remove(array $params = []) : array
    {
        return $this->delete(self::URI, $params);
    }
}
