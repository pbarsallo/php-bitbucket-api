<?php

declare(strict_types=1);

namespace Bitbucket\Api\Repositories\User\Commit;

use Bitbucket\Api\Repositories\User\BaseUserApi;

/**
 * Base User Repository Commit API Class
 *
 * @author Patrick Barsallo
 */
class BaseCommitApi extends BaseUserApi
{
    /**
     * @var string
     */
    protected $node;

    /**
     * @var string
     */
    protected $commitUri;

    /**
     * Create a new base commit API instance
     *
     * @param string $node
     *
     * @return void
     */
    public function __construct(string $node)
    {
        parent::__construct($this->repoSlug);
        $this->node = $node;
        $this->commitUri = "{$this->userRepositoryUri}/commit/{$node}";
    }
}
