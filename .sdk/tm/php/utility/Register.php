<?php
declare(strict_types=1);

// BreakingBadQuotes SDK utility registration

require_once __DIR__ . '/../core/UtilityType.php';
require_once __DIR__ . '/Clean.php';
require_once __DIR__ . '/Done.php';
require_once __DIR__ . '/MakeError.php';
require_once __DIR__ . '/FeatureAdd.php';
require_once __DIR__ . '/FeatureHook.php';
require_once __DIR__ . '/FeatureInit.php';
require_once __DIR__ . '/Fetcher.php';
require_once __DIR__ . '/MakeFetchDef.php';
require_once __DIR__ . '/MakeContext.php';
require_once __DIR__ . '/MakeOptions.php';
require_once __DIR__ . '/MakeRequest.php';
require_once __DIR__ . '/MakeResponse.php';
require_once __DIR__ . '/MakeResult.php';
require_once __DIR__ . '/MakePoint.php';
require_once __DIR__ . '/MakeSpec.php';
require_once __DIR__ . '/MakeUrl.php';
require_once __DIR__ . '/Param.php';
require_once __DIR__ . '/PrepareAuth.php';
require_once __DIR__ . '/PrepareBody.php';
require_once __DIR__ . '/PrepareHeaders.php';
require_once __DIR__ . '/PrepareMethod.php';
require_once __DIR__ . '/PrepareParams.php';
require_once __DIR__ . '/PreparePath.php';
require_once __DIR__ . '/PrepareQuery.php';
require_once __DIR__ . '/ResultBasic.php';
require_once __DIR__ . '/ResultBody.php';
require_once __DIR__ . '/ResultHeaders.php';
require_once __DIR__ . '/TransformRequest.php';
require_once __DIR__ . '/TransformResponse.php';

BreakingBadQuotesUtility::setRegistrar(function (BreakingBadQuotesUtility $u): void {
    $u->clean = [BreakingBadQuotesClean::class, 'call'];
    $u->done = [BreakingBadQuotesDone::class, 'call'];
    $u->make_error = [BreakingBadQuotesMakeError::class, 'call'];
    $u->feature_add = [BreakingBadQuotesFeatureAdd::class, 'call'];
    $u->feature_hook = [BreakingBadQuotesFeatureHook::class, 'call'];
    $u->feature_init = [BreakingBadQuotesFeatureInit::class, 'call'];
    $u->fetcher = [BreakingBadQuotesFetcher::class, 'call'];
    $u->make_fetch_def = [BreakingBadQuotesMakeFetchDef::class, 'call'];
    $u->make_context = [BreakingBadQuotesMakeContext::class, 'call'];
    $u->make_options = [BreakingBadQuotesMakeOptions::class, 'call'];
    $u->make_request = [BreakingBadQuotesMakeRequest::class, 'call'];
    $u->make_response = [BreakingBadQuotesMakeResponse::class, 'call'];
    $u->make_result = [BreakingBadQuotesMakeResult::class, 'call'];
    $u->make_point = [BreakingBadQuotesMakePoint::class, 'call'];
    $u->make_spec = [BreakingBadQuotesMakeSpec::class, 'call'];
    $u->make_url = [BreakingBadQuotesMakeUrl::class, 'call'];
    $u->param = [BreakingBadQuotesParam::class, 'call'];
    $u->prepare_auth = [BreakingBadQuotesPrepareAuth::class, 'call'];
    $u->prepare_body = [BreakingBadQuotesPrepareBody::class, 'call'];
    $u->prepare_headers = [BreakingBadQuotesPrepareHeaders::class, 'call'];
    $u->prepare_method = [BreakingBadQuotesPrepareMethod::class, 'call'];
    $u->prepare_params = [BreakingBadQuotesPrepareParams::class, 'call'];
    $u->prepare_path = [BreakingBadQuotesPreparePath::class, 'call'];
    $u->prepare_query = [BreakingBadQuotesPrepareQuery::class, 'call'];
    $u->result_basic = [BreakingBadQuotesResultBasic::class, 'call'];
    $u->result_body = [BreakingBadQuotesResultBody::class, 'call'];
    $u->result_headers = [BreakingBadQuotesResultHeaders::class, 'call'];
    $u->transform_request = [BreakingBadQuotesTransformRequest::class, 'call'];
    $u->transform_response = [BreakingBadQuotesTransformResponse::class, 'call'];
});
