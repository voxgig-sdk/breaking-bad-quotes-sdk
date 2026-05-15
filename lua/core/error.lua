-- BreakingBadQuotes SDK error

local BreakingBadQuotesError = {}
BreakingBadQuotesError.__index = BreakingBadQuotesError


function BreakingBadQuotesError.new(code, msg, ctx)
  local self = setmetatable({}, BreakingBadQuotesError)
  self.is_sdk_error = true
  self.sdk = "BreakingBadQuotes"
  self.code = code or ""
  self.msg = msg or ""
  self.ctx = ctx
  self.result = nil
  self.spec = nil
  return self
end


function BreakingBadQuotesError:error()
  return self.msg
end


function BreakingBadQuotesError:__tostring()
  return self.msg
end


return BreakingBadQuotesError
