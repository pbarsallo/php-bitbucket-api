<?php

declare(strict_types=1);

namespace Bitbucket\Api\Repositories\User;

/**
 * Repository versions API
 * @see https://developer.atlassian.com/bitbucket/api/2/reference/resource/repositories/%7Busername%7D/%7Brepo_slug%7D/versions
 *
 * @author Patrick Barsallo
 */
class Versions extends BaseUserApi
{
    /**
     * List all versions for a specific repository
     *
     * @param array $params
     *
     * @return array
     */
    public function all(array $params = [])
    {
        return $this->get("{$this->userRepositoryUri}/versions", $params);
    }

    /**
     * Get specific version details
     *
     * @param string $versionId
     * @param array  $params
     *
     * @return array
     */
    public function show(string $versionId, array $params = [])
    {
        return $this->get("{$this->userRepositoryUri}/versions/{$versionId}", $params);
    }
}
