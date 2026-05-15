<?php
declare(strict_types=1);

// BreakingBadQuotes SDK utility: result_headers

class BreakingBadQuotesResultHeaders
{
    public static function call(BreakingBadQuotesContext $ctx): ?BreakingBadQuotesResult
    {
        $response = $ctx->response;
        $result = $ctx->result;
        if ($result) {
            if ($response && is_array($response->headers)) {
                $result->headers = $response->headers;
            } else {
                $result->headers = [];
            }
        }
        return $result;
    }
}
