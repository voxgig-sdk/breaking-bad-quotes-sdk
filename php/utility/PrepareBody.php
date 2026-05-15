<?php
declare(strict_types=1);

// BreakingBadQuotes SDK utility: prepare_body

class BreakingBadQuotesPrepareBody
{
    public static function call(BreakingBadQuotesContext $ctx): mixed
    {
        if ($ctx->op->input === 'data') {
            return ($ctx->utility->transform_request)($ctx);
        }
        return null;
    }
}
