# BreakingBadQuotes SDK utility registration
require_relative '../core/utility_type'
require_relative 'clean'
require_relative 'done'
require_relative 'make_error'
require_relative 'feature_add'
require_relative 'feature_hook'
require_relative 'feature_init'
require_relative 'fetcher'
require_relative 'make_fetch_def'
require_relative 'make_context'
require_relative 'make_options'
require_relative 'make_request'
require_relative 'make_response'
require_relative 'make_result'
require_relative 'make_point'
require_relative 'make_spec'
require_relative 'make_url'
require_relative 'param'
require_relative 'prepare_auth'
require_relative 'prepare_body'
require_relative 'prepare_headers'
require_relative 'prepare_method'
require_relative 'prepare_params'
require_relative 'prepare_path'
require_relative 'prepare_query'
require_relative 'result_basic'
require_relative 'result_body'
require_relative 'result_headers'
require_relative 'transform_request'
require_relative 'transform_response'

BreakingBadQuotesUtility.registrar = ->(u) {
  u.clean = BreakingBadQuotesUtilities::Clean
  u.done = BreakingBadQuotesUtilities::Done
  u.make_error = BreakingBadQuotesUtilities::MakeError
  u.feature_add = BreakingBadQuotesUtilities::FeatureAdd
  u.feature_hook = BreakingBadQuotesUtilities::FeatureHook
  u.feature_init = BreakingBadQuotesUtilities::FeatureInit
  u.fetcher = BreakingBadQuotesUtilities::Fetcher
  u.make_fetch_def = BreakingBadQuotesUtilities::MakeFetchDef
  u.make_context = BreakingBadQuotesUtilities::MakeContext
  u.make_options = BreakingBadQuotesUtilities::MakeOptions
  u.make_request = BreakingBadQuotesUtilities::MakeRequest
  u.make_response = BreakingBadQuotesUtilities::MakeResponse
  u.make_result = BreakingBadQuotesUtilities::MakeResult
  u.make_point = BreakingBadQuotesUtilities::MakePoint
  u.make_spec = BreakingBadQuotesUtilities::MakeSpec
  u.make_url = BreakingBadQuotesUtilities::MakeUrl
  u.param = BreakingBadQuotesUtilities::Param
  u.prepare_auth = BreakingBadQuotesUtilities::PrepareAuth
  u.prepare_body = BreakingBadQuotesUtilities::PrepareBody
  u.prepare_headers = BreakingBadQuotesUtilities::PrepareHeaders
  u.prepare_method = BreakingBadQuotesUtilities::PrepareMethod
  u.prepare_params = BreakingBadQuotesUtilities::PrepareParams
  u.prepare_path = BreakingBadQuotesUtilities::PreparePath
  u.prepare_query = BreakingBadQuotesUtilities::PrepareQuery
  u.result_basic = BreakingBadQuotesUtilities::ResultBasic
  u.result_body = BreakingBadQuotesUtilities::ResultBody
  u.result_headers = BreakingBadQuotesUtilities::ResultHeaders
  u.transform_request = BreakingBadQuotesUtilities::TransformRequest
  u.transform_response = BreakingBadQuotesUtilities::TransformResponse
}
