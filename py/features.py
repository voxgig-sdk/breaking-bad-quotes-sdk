# BreakingBadQuotes SDK feature factory

from feature.base_feature import BreakingBadQuotesBaseFeature
from feature.test_feature import BreakingBadQuotesTestFeature


def _make_feature(name):
    features = {
        "base": lambda: BreakingBadQuotesBaseFeature(),
        "test": lambda: BreakingBadQuotesTestFeature(),
    }
    factory = features.get(name)
    if factory is not None:
        return factory()
    return features["base"]()
