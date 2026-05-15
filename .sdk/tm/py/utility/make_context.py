# BreakingBadQuotes SDK utility: make_context

from core.context import BreakingBadQuotesContext


def make_context_util(ctxmap, basectx):
    return BreakingBadQuotesContext(ctxmap, basectx)
