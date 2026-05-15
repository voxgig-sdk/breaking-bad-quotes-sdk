# ProjectName SDK exists test

import pytest
from breakingbadquotes_sdk import BreakingBadQuotesSDK


class TestExists:

    def test_should_create_test_sdk(self):
        testsdk = BreakingBadQuotesSDK.test(None, None)
        assert testsdk is not None
