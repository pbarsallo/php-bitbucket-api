<?php

declare(strict_types=1);

namespace Bitbucket\Api\Repositories\User;

use Bitbucket\Api\Repositories\User\Refs\Branches;
use Bitbucket\Api\Repositories\User\Refs\Tags;

/**
 * Repository refs API class
 * @see https://developer.atlassian.com/bitbucket/api/2/reference/resource/repositories/%7Busername%7D/%7Brepo_slug%7D/refs
 *
 * @author Patrick Barsallo
 */
class Refs extends BaseUserApi
{
    /**
     * List all refs for repository
     *
     * @param array $params
     *
     * @return array
     */
    public function all(array $params = []) : array
    {
        return $this->get("{$this->userRepositoryUri}/refs", $params);
    }

    /**
     * Get ref branches API
     *
     * @return Branches
     */
    public function branches() : Branches
    {
        return new Branches;
    }

    /**
     * Get ref tags API
     *
     * @return Tags
     */
    public function tags() : Tags
    {
        return new Tags;
    }
}
