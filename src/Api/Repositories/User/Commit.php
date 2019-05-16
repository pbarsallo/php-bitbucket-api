<?php

declare(strict_types=1);

namespace Bitbucket\Api\Repositories\User;

use Bitbucket\Api\Repositories\User\Commit\Approval;
use Bitbucket\Api\Repositories\User\Commit\Comments;
use Bitbucket\Api\Repositories\User\Commit\Statuses;

class Commit extends BaseUserApi
{
    /**
     * Get specified commit
     *
     * @param string $node
     * @param array  $params
     *
     * @return array
     */
    public function show(string $node, array $params = [])
    {
        return $this->get("{$this->userRepositoryUri}/commit/{$node}", $params);
    }

    public function approval(string $node)
    {
        return new Approval($node);
    }

    public function comments(string $node)
    {
        return new Comments($node);
    }

    public function statuses(string $node)
    {
        return new Statuses($node);
    }
}
