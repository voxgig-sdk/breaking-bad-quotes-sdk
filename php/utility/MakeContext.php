<?php
declare(strict_types=1);

// BreakingBadQuotes SDK utility: make_context

require_once __DIR__ . '/../core/Context.php';

class BreakingBadQuotesMakeContext
{
    public static function call(array $ctxmap, ?BreakingBadQuotesContext $basectx): BreakingBadQuotesContext
    {
        return new BreakingBadQuotesContext($ctxmap, $basectx);
    }
}
