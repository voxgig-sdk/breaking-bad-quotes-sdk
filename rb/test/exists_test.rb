# BreakingBadQuotes SDK exists test

require "minitest/autorun"
require_relative "../BreakingBadQuotes_sdk"

class ExistsTest < Minitest::Test
  def test_create_test_sdk
    testsdk = BreakingBadQuotesSDK.test(nil, nil)
    assert !testsdk.nil?
  end
end
