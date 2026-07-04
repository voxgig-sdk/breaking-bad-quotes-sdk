<?php
declare(strict_types=1);

// BreakingBadQuotes SDK utility: make_error

require_once __DIR__ . '/../core/Operation.php';
require_once __DIR__ . '/../core/Result.php';
require_once __DIR__ . '/../core/Error.php';

class BreakingBadQuotesMakeError
{
    public static function call(?BreakingBadQuotesContext $ctx, mixed $err): mixed
    {
        if ($ctx === null) {
            require_once __DIR__ . '/../core/Context.php';
            $ctx = new BreakingBadQuotesContext([], null);
        }
        $op = $ctx->op ?? new BreakingBadQuotesOperation([]);
        $opname = $op->name;
        if ($opname === '' || $opname === '_') {
            $opname = 'unknown operation';
        }

        $result = $ctx->result ?? new BreakingBadQuotesResult([]);
        $result->ok = false;

        if ($err === null) {
            $err = $result->err;
        }
        if ($err === null) {
            $err = $ctx->make_error('unknown', 'unknown error');
        }

        $errmsg = ($err instanceof BreakingBadQuotesError) ? $err->msg : (string)$err;
        $msg = "BreakingBadQuotesSDK: {$opname}: {$errmsg}";
        $msg = ($ctx->utility->clean)($ctx, $msg);

        $result->err = null;
        $spec = $ctx->spec;

        if ($ctx->ctrl->explain) {
            $ctx->ctrl->explain['err'] = ['message' => $msg];
        }

        $sdk_err = new BreakingBadQuotesError('', $msg, $ctx);
        $sdk_err->result = ($ctx->utility->clean)($ctx, $result);
        $sdk_err->spec = ($ctx->utility->clean)($ctx, $spec);
        if ($err instanceof BreakingBadQuotesError) {
            $sdk_err->sdk_code = $err->sdk_code;
        }

        $ctx->ctrl->err = $sdk_err;

        if ($ctx->ctrl->throw_err === false) {
            return $result->resdata;
        }
        throw $sdk_err;
    }
}
