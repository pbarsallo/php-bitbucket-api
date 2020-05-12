<?php

declare(strict_types=1);

namespace Bitbucket\Api\Repositories\Workspace\Commit\Properties;

use Bitbucket\Api\Repositories\Workspace\Commit\BaseCommitApi;

/**
 * Base Commit Properties API Class
 *
 * @author Patrick Barsallo
 */
class BasePropertiesApi extends BaseCommitApi
{
    /**
     * @var string
     */
    protected $appKey;

    /**
     * @var string
     */
    protected $propertiesUri;

    /**
     * Create new base commit properties API instance
     *
     * @param string $appKey
     *
     * @return void
     */
    public function __construct(string $appKey)
    {
        parent::__construct($this->node);
        $this->propertiesUri = "{$this->commitUri}/properties/{$appKey}";
    }
}
