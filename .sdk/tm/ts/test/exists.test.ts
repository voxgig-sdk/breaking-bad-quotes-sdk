
import { test, describe } from 'node:test'
import { equal } from 'node:assert'


import { BreakingBadQuotesSDK } from '..'


describe('exists', async () => {

  test('test-mode', async () => {
    const testsdk = await BreakingBadQuotesSDK.test()
    equal(null !== testsdk, true)
  })

})
