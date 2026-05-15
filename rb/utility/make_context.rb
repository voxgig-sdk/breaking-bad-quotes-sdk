# BreakingBadQuotes SDK utility: make_context
require_relative '../core/context'
module BreakingBadQuotesUtilities
  MakeContext = ->(ctxmap, basectx) {
    BreakingBadQuotesContext.new(ctxmap, basectx)
  }
end
