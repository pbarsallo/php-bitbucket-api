<?php

declare(strict_types=1);

namespace Bitbucket\Api\Addon\Linkers;

use Bitbucket\Api\Addon\BaseAddonApi;

class BaseLinkersApi extends BaseAddonApi
{
    /**
     * @var string
     */
    protected $linkersUri;

    public function __construct(string $linkerKey)
    {
        parent::__construct();

        $this->linkersUri = "{$this->addonUri}/linkers/{$linkerKey}";
    }
}
