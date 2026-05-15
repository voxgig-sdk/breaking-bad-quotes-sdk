<?php
declare(strict_types=1);

// BreakingBadQuotes SDK utility: feature_add

class BreakingBadQuotesFeatureAdd
{
    public static function call(BreakingBadQuotesContext $ctx, mixed $f): void
    {
        $ctx->client->features[] = $f;
    }
}
