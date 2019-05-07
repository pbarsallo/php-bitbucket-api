<?php

declare(strict_types=1);

namespace Bitbucket\Http;

/**
 * Implementation of query string hash for Atlassian JWT tokens
 * @see https://developer.atlassian.com/cloud/bitbucket/query-string-hash/
 *
 * @author Patrick Barsallo
 */
class QueryStringHash
{
    /**
     * @var string
     */
    private $method;

    /**
     * @var string
     */
    private $relativeUrl;

    /**
     * @var string
     */
    private $queryString;

    /**
     * Create new query string hash calculator instance
     *
     * @param string $method
     * @param string $relativeUrl
     * @param string $queryString
     *
     * @return void
     */
    public function __construct(string $method, string $relativeUrl, string $queryString)
    {
        $this->method = $method;
        $this->relativeUrl = $relativeUrl;
        $this->queryString = $queryString;
    }

    /**
     * Get a hex digest representing the query string hash
     *
     * @return string
     */
    public function hexDigest() : string
    {
        $queryString = $this->getEncodedQueryString();

        $canonicalRequestString = "$this->method&$this->relativeUrl&$queryString";

        return hash('sha256', $canonicalRequestString);
    }

    /**
     * Get properly encoded query string
     *
     * @return string
     */
    private function getEncodedQueryString() : string
    {
        parse_str($this->queryString, $params);

        $encodedParams = [];

        foreach ($params as $key => $value) {
            $encodedParams[str_replace('+', ' ', $key)] = str_replace('+', ' ', $value);
        }

        ksort($encodedParams);

        return http_build_query($encodedParams, null, '&', PHP_QUERY_RFC3986);
    }
}
