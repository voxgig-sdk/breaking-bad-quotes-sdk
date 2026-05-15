<?php
declare(strict_types=1);

// BreakingBadQuotes SDK exists test

require_once __DIR__ . '/../breakingbadquotes_sdk.php';

use PHPUnit\Framework\TestCase;

class ExistsTest extends TestCase
{
    public function test_create_test_sdk(): void
    {
        $testsdk = BreakingBadQuotesSDK::test(null, null);
        $this->assertNotNull($testsdk);
    }
}
