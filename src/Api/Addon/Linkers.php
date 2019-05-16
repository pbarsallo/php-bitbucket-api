<?php

declare(strict_types=1);

namespace Bitbucket\Api\Addon;

use Bitbucket\Api\Addon\Linkers\Values;

/**
 * Linkers API class
 * @see https://developer.atlassian.com/bitbucket/api/2/reference/resource/addon/linkers
 *
 * @author Patrick Barsallo
 */
class Linkers extends BaseAddonApi
{
    /**
     * List all add-on linkers
     *
     * @param array $params
     *
     * @return array
     */
    public function all(array $params = []) : array
    {
        return $this->get("{$this->addonUri}/linkers", $params);
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
        return $this->get("{$this->addonUri}/linkers/$linkerKey", $params);
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
        return new Values($linkerKey);
    }
}
