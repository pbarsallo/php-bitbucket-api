<?php

declare(strict_types=1);

namespace Bitbucket\Api\Snippets\User\Node;

use Bitbucket\Api\Snippets\User\BaseUserApi;

/**
 * Base User Snippet Node API Class
 *
 * @author Patrick Barsallo
 */
class BaseNodeApi extends BaseUserApi
{
    /**
     * @var string
     */
    protected $nodeUri;

    /**
     * Create new base node API instance
     *
     * @param string $nodeId
     *
     * @return void
     */
    public function __construct(string $nodeId)
    {
        parent::__construct($this->encodedId);
        $this->nodeUri = "{$this->userSnippetUri}/{$nodeId}";
    }
}
