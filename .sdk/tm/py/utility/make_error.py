# BreakingBadQuotes SDK utility: make_error

from __future__ import annotations
from core.operation import BreakingBadQuotesOperation
from core.result import BreakingBadQuotesResult
from core.control import BreakingBadQuotesControl
from core.error import BreakingBadQuotesError


def make_error_util(ctx, err):
    if ctx is None:
        from core.context import BreakingBadQuotesContext
        ctx = BreakingBadQuotesContext({}, None)

    op = ctx.op
    if op is None:
        op = BreakingBadQuotesOperation({})
    opname = op.name
    if opname == "" or opname == "_":
        opname = "unknown operation"

    result = ctx.result
    if result is None:
        result = BreakingBadQuotesResult({})
    result.ok = False

    if err is None:
        err = result.err
    if err is None:
        err = ctx.make_error("unknown", "unknown error")

    errmsg = ""
    if isinstance(err, BreakingBadQuotesError):
        errmsg = err.msg
    elif hasattr(err, "msg") and err.msg is not None:
        errmsg = err.msg
    elif isinstance(err, str):
        errmsg = err
    else:
        errmsg = str(err)

    msg = "BreakingBadQuotesSDK: " + opname + ": " + errmsg
    msg = ctx.utility.clean(ctx, msg)

    result.err = None

    spec = ctx.spec

    if ctx.ctrl.explain is not None:
        ctx.ctrl.explain["err"] = {"message": msg}

    sdk_err = BreakingBadQuotesError("", msg, ctx)
    sdk_err.result = ctx.utility.clean(ctx, result)
    sdk_err.spec = ctx.utility.clean(ctx, spec)

    if isinstance(err, BreakingBadQuotesError):
        sdk_err.code = err.code

    ctx.ctrl.err = sdk_err

    if ctx.ctrl.throw_err is False:
        return result.resdata

    raise sdk_err
