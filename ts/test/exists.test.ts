
import { test, describe } from 'node:test'
import { equal } from 'node:assert'


import { BreakingBadQuotesSDK } from '..'


describe('exists', async () => {

  test('test-mode', () => {
    const testsdk = BreakingBadQuotesSDK.test()
    equal(testsdk instanceof BreakingBadQuotesSDK, true,
      'BreakingBadQuotesSDK.test() must return a client synchronously')
  })

})
