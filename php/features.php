<?php
declare(strict_types=1);

// BreakingBadQuotes SDK feature factory

require_once __DIR__ . '/feature/BaseFeature.php';
require_once __DIR__ . '/feature/TestFeature.php';


class BreakingBadQuotesFeatures
{
    public static function make_feature(string $name)
    {
        switch ($name) {
            case "base":
                return new BreakingBadQuotesBaseFeature();
            case "test":
                return new BreakingBadQuotesTestFeature();
            default:
                return new BreakingBadQuotesBaseFeature();
        }
    }
}
