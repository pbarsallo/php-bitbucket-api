<?php

declare(strict_types=1);

namespace Bitbucket\Api\Addon\Linkers;

/**
 * Linker Values API
 * @see https://developer.atlassian.com/bitbucket/api/2/reference/resource/addon/linkers/%7Blinker_key%7D/values
 *
 * @author Patrick Barsallo
 */
class Values extends BaseLinkersApi
{
    /**
     * Update value for linker key
     *
     * @param array $params
     *
     * @return array
     */
    public function update(array $params = []) : array
    {
        return $this->put("{$this->linkersUri}/values", $params);
    }

    /**
     * Create value for linker key
     *
     * @param array $params
     *
     * @return array
     */
    public function create(array $params = []) : array
    {
        return $this->post("{$this->linkersUri}/values", $params);
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
        return $this->get("{$this->linkersUri}/values", $params);
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
        return $this->delete("{$this->linkersUri}/values", $params);
    }
}
