<?php

declare(strict_types=1);

namespace Bitbucket\Api\Repositories\User\Commit;

class Comments
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

    public function create(array $params)
    {

    }

    public function all(array $params = [])
    {

    }

    public function show(int $commentId, array $params = [])
    {

    }
}
