<?php

declare(strict_types=1);

namespace Bitbucket\Api\Repositories\Workspace\Commit\Reports;

use Bitbucket\Api\Repositories\Workspace\Commit\BaseCommitApi;

/**
 * Base Commit Reports API Class
 *
 * @author Patrick Barsallo
 */
class BaseReportsApi extends BaseCommitApi
{
    /**
     * @var string
     */
    protected $reportId;

    /**
     * @var string
     */
    protected $reportUri;

    /**
     * Create new base commit reports API instance
     *
     * @param string $reportId
     *
     * @return void
     */
    public function __construct(string $reportId)
    {
        parent::__construct($this->node);
        $this->reportUri = "{$this->commitUri}/reports/{$reportId}";
    }
}
