# BreakingBadQuotes SDK utility: prepare_body
require_relative 'media'
module BreakingBadQuotesUtilities
  PrepareBody = ->(ctx) {
    return nil unless ctx.op.input == "data"
    return BreakingBadQuotesUtilities.raw_body(ctx.reqdata) if BreakingBadQuotesUtilities.raw_request?(ctx.point)
    ctx.utility.transform_request.call(ctx)
  }
end
