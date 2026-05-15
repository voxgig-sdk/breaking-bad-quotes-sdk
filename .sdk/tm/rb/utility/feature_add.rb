# BreakingBadQuotes SDK utility: feature_add
module BreakingBadQuotesUtilities
  FeatureAdd = ->(ctx, f) {
    ctx.client.features << f
  }
end
