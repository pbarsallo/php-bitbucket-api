<?php

declare(strict_types=1);

namespace Bitbucket\Api\Repositories\User;

use Bitbucket\Api\Repositories\User\Issues\Export;
use Bitbucket\Api\Repositories\User\Issues\Import;
use Bitbucket\Api\Repositories\User\Issues\Issue;

/**
 * User Repository Issues API Class
 * @see https://developer.atlassian.com/bitbucket/api/2/reference/resource/repositories/%7Busername%7D/%7Brepo_slug%7D/issues
 *
 * @author Patrick Barsallo
 */
class Issues extends BaseUserApi
{
    /**
     * Create a new issue
     *
     * @param array $params
     *
     * @return array
     */
    public function create(array $params = []) : array
    {
        return $this->post("{$this->userRepositoryUri}/issues", $params);
    }

    /**
     * List all issues
     *
     * @param array $params
     *
     * @return array
     */
    public function all(array $params = []) : array
    {
        return $this->get("{$this->userRepositoryUri}/issues", $params);
    }

    /**
     * Update an issue
     *
     * @param string $issueId
     * @param array  $params
     *
     * @return array
     */
    public function update(string $issueId, array $params = []) : array
    {
        return $this->put("{$this->userRepositoryUri}/issues/{$issueId}", $params);
    }

    /**
     * Get a specific issue
     *
     * @param string $issueId
     * @param array  $params
     *
     * @return array
     */
    public function show(string $issueId, array $params = []) : array
    {
        return $this->get("{$this->userRepositoryUri}/issues/{$issueId}", $params);
    }

    /**
     * Remove a specific issue
     *
     * @param string $issueId
     * @param array  $params
     *
     * @return array
     */
    public function remove(string $issueId, array $params = []) : array
    {
        return $this->delete("{$this->userRepositoryUri}/issues/{$issueId}", $params);
    }

    /**
     * Get issue export API
     *
     * @return Export
     */
    public function export() : Export
    {
        return new Export;
    }

    /**
     * Get issue import API
     *
     * @return Import
     */
    public function import() : Import
    {
        return new Import;
    }

    /**
     * Get issue API
     *
     * @return Issue
     */
    public function issue() : Issue
    {
        return new Issue;
    }
}
