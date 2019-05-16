<?php

declare(strict_types=1);

namespace Bitbucket\Api\Repositories\User\Commit;

use Bitbucket\Api\Repositories\User\BaseUserApi;

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

    public function __construct(string $node)
    {
        parent::__construct($this->repoSlug);
        $this->node = $node;
        $this->commitUri = "{$this->userRepositoryUri}/commit/{$node}";
    }
}
