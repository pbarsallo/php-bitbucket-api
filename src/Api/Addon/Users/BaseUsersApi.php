<?php

declare(strict_types=1);

namespace Bitbucket\Api\Addon\Users;

use Bitbucket\Api\Addon\BaseAddonApi;

class BaseUsersApi extends BaseAddonApi
{
    /**
     * @var string
     */
    protected $targetUserUri;

    public function __construct(string $targetUser)
    {
        parent::__construct();

        $this->targetUserUri = "{$this->addonUri}/users/{$targetUser}";
    }
}
