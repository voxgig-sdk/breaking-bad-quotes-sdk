
import { Context } from './Context'


class BreakingBadQuotesError extends Error {

  isBreakingBadQuotesError = true

  sdk = 'BreakingBadQuotes'

  code: string
  ctx: Context

  constructor(code: string, msg: string, ctx: Context) {
    super(msg)
    this.code = code
    this.ctx = ctx
  }

}

export {
  BreakingBadQuotesError
}

