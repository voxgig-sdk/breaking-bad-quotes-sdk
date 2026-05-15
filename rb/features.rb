# BreakingBadQuotes SDK feature factory

require_relative 'feature/base_feature'
require_relative 'feature/test_feature'


module BreakingBadQuotesFeatures
  def self.make_feature(name)
    case name
    when "base"
      BreakingBadQuotesBaseFeature.new
    when "test"
      BreakingBadQuotesTestFeature.new
    else
      BreakingBadQuotesBaseFeature.new
    end
  end
end
