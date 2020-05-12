<?php

declare(strict_types=1);

namespace Bitbucket\Api\Repositories\Workspace\Commit;

use Bitbucket\Api\Repositories\Workspace\Commit\Properties\Property;

/**
 * Repository Commit Properties API Class
 * @see https://developer.atlassian.com/bitbucket/api/2/reference/resource/repositories/%7Bworkspace%7D/%7Brepo_slug%7D/commit/%7Bcommit%7D/properties
 *
 * @author Patrick Barsallo
 */
class Properties extends BaseCommitApi
{
    /**
     * Get commit property API
     *
     * @param string $appKey
     *
     * @return Property
     */
    public function property(string $appKey) : Property
    {
        return new Property($appKey);
    }
}
