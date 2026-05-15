package core

var UtilityRegistrar func(u *Utility)

var NewBaseFeatureFunc func() Feature

var NewTestFeatureFunc func() Feature

var NewQuoteEntityFunc func(client *BreakingBadQuotesSDK, entopts map[string]any) BreakingBadQuotesEntity

