# BreakingBadQuotes SDK feature factory

require_relative 'feature/base_feature'
require_relative 'feature/ratelimit_feature'
require_relative 'feature/retry_feature'
require_relative 'feature/test_feature'
require_relative 'feature/timeout_feature'


module BreakingBadQuotesFeatures
  def self.make_feature(name)
    case name
    when "base"
      BreakingBadQuotesBaseFeature.new
    when "ratelimit"
      BreakingBadQuotesRatelimitFeature.new
    when "retry"
      BreakingBadQuotesRetryFeature.new
    when "test"
      BreakingBadQuotesTestFeature.new
    when "timeout"
      BreakingBadQuotesTimeoutFeature.new
    else
      BreakingBadQuotesBaseFeature.new
    end
  end
end
