# BreakingBadQuotes SDK utility: make_context

from projectname_sdk.core.context import BreakingBadQuotesContext


def make_context_util(ctxmap, basectx):
    return BreakingBadQuotesContext(ctxmap, basectx)
