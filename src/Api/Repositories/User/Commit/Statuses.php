<?php

declare(strict_types=1);

namespace Bitbucket\Api\Repositories\User\Commit;

use Bitbucket\Api\Repositories\User\Commit\Statuses\Build;

class Statuses
{
    /**
     * @var string
     */
    private $username;

    /**
     * @var string
     */
    private $repoSlug;

    /**
     * @var string
     */
    private $node;

    public function __construct(string $username, string $repoSlug, string $node)
    {
        $this->username = $username;
        $this->repoSlug = $repoSlug;
        $this->node = $node;
    }

    public function all(array $params = [])
    {

    }

    public function build()
    {
        return new Build($this->username, $this->repoSlug, $this->node);
    }
}
