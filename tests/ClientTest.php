<?php

declare(strict_types=1);

namespace Bitbucket\Tests;

use Bitbucket\Client;

class ClientTest extends \PHPUnit\Framework\TestCase
{
    public function testHasHttpClientAttribute()
    {
        $this->assertClassHasAttribute('httpClient', Client::class);
    }
}
