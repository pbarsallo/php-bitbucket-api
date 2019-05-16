<?php

declare(strict_types=1);

namespace Bitbucket\Api\Repositories\User\Commit;

class Comments extends BaseCommitApi
{
    public function create(array $params = [])
    {
        return $this->post("{$this->commitUri}/comments", $params);
    }

    public function all(array $params = [])
    {
        return $this->get("{$this->commitUri}/comments", $params);
    }

    public function show(int $commentId, array $params = [])
    {
        return $this->get("{$this->commitUri}/comments/{$commentId}", $params);
    }
}
