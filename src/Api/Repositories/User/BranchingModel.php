<?php

declare(strict_types=1);

namespace Bitbucket\Api\Repositories\User;

use Bitbucket\Api\Repositories\User\BranchingModel\Settings;

class BranchingModel
{
    /**
     * @var string
     */
    private $username;

    /**
     * @var string
     */
    private $repoSlug;

    public function __construct(string $username, string $repoSlug)
    {
        $this->username = $username;
        $this->repoSlug = $repoSlug;
    }

    public function show(array $params = [])
    {

    }

    public function settings()
    {
        return new Settings($this->username, $this->repoSlug);
    }
}
