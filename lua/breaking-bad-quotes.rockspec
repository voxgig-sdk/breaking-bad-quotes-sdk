package = "voxgig-sdk-breaking-bad-quotes"
version = "0.0-1"
source = {
  url = "git://github.com/voxgig-sdk/breaking-bad-quotes-sdk.git"
}
description = {
  summary = "BreakingBadQuotes SDK for Lua",
  license = "MIT"
}
dependencies = {
  "lua >= 5.3",
  "dkjson >= 2.5",
  "dkjson >= 2.5",
}
build = {
  type = "builtin",
  modules = {
    ["breaking-bad-quotes_sdk"] = "breaking-bad-quotes_sdk.lua",
    ["config"] = "config.lua",
    ["features"] = "features.lua",
  }
}
