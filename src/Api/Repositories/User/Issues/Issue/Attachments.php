<?php

declare(strict_types=1);

namespace Bitbucket\Api\Repositories\User\Issues\Issue;

class Attachments
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
    private $issueId;

    public function __construct(string $username, string $repoSlug, string $issueId)
    {
        $this->username = $username;
        $this->repoSlug = $repoSlug;
        $this->issueId = $issueId;
    }

    public function create(array $params)
    {

    }

    public function all(array $params = [])
    {

    }

    public function show(string $path, array $params = [])
    {

    }

    public function remove(string $path, array $params = [])
    {

    }
}
