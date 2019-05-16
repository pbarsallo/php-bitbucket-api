<?php

declare(strict_types=1);

namespace Bitbucket\Api\Addon;

use Bitbucket\Api\BaseApi;

/**
 * Base add-on API class
 *
 * @author Patrick Barsallo
 */
class BaseAddonApi extends BaseApi
{
    /**
     * @var string
     */
    protected $addonUri = '/addon';

    /**
     * Create new add-on base API instance
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct($this->httpClient);
    }
}
