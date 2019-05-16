<?php

declare(strict_types=1);

namespace Bitbucket\Api\Addon\Linkers;

use Bitbucket\Api\Addon\BaseAddonApi;

/**
 * Base Add-On Linkers API Class
 *
 * @author Patrick Barsallo
 */
class BaseLinkersApi extends BaseAddonApi
{
    /**
     * @var string
     */
    protected $linkersUri;

    /**
     * Create new base linkers API instance
     *
     * @param string $linkerKey
     *
     * @return void
     */
    public function __construct(string $linkerKey)
    {
        parent::__construct();
        $this->linkersUri = "{$this->addonUri}/linkers/{$linkerKey}";
    }
}
