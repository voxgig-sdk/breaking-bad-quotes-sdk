# BreakingBadQuotes SDK feature factory

from breakingbadquotes_sdk.feature.base_feature import BreakingBadQuotesBaseFeature
from breakingbadquotes_sdk.feature.ratelimit_feature import BreakingBadQuotesRatelimitFeature
from breakingbadquotes_sdk.feature.retry_feature import BreakingBadQuotesRetryFeature
from breakingbadquotes_sdk.feature.test_feature import BreakingBadQuotesTestFeature
from breakingbadquotes_sdk.feature.timeout_feature import BreakingBadQuotesTimeoutFeature


_FEATURES = {
    "base": lambda: BreakingBadQuotesBaseFeature(),
    "ratelimit": lambda: BreakingBadQuotesRatelimitFeature(),
    "retry": lambda: BreakingBadQuotesRetryFeature(),
    "test": lambda: BreakingBadQuotesTestFeature(),
    "timeout": lambda: BreakingBadQuotesTimeoutFeature(),
}


def _make_feature(name):
    factory = _FEATURES.get(name)
    if factory is not None:
        return factory()
    return _FEATURES["base"]()


# True when this SDK was generated with the named feature class - the
# constructor's tolerance for extend-carried features reads this (an
# active name with no generated class must not become a BaseFeature
# stray when an extend instance carries it).
def _has_feature(name):
    return name in _FEATURES
