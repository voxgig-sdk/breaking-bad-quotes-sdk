package voxgigbreakingbadquotessdk

import (
	"github.com/voxgig-sdk/breaking-bad-quotes-sdk/go/core"
	"github.com/voxgig-sdk/breaking-bad-quotes-sdk/go/entity"
	"github.com/voxgig-sdk/breaking-bad-quotes-sdk/go/feature"
	_ "github.com/voxgig-sdk/breaking-bad-quotes-sdk/go/utility"
)

// Type aliases preserve external API.
type BreakingBadQuotesSDK = core.BreakingBadQuotesSDK
type Context = core.Context
type Utility = core.Utility
type Feature = core.Feature
type Entity = core.Entity
type BreakingBadQuotesEntity = core.BreakingBadQuotesEntity
type FetcherFunc = core.FetcherFunc
type Spec = core.Spec
type Result = core.Result
type Response = core.Response
type Operation = core.Operation
type Control = core.Control
type BreakingBadQuotesError = core.BreakingBadQuotesError

// BaseFeature from feature package.
type BaseFeature = feature.BaseFeature

func init() {
	core.NewBaseFeatureFunc = func() core.Feature {
		return feature.NewBaseFeature()
	}
	core.NewTestFeatureFunc = func() core.Feature {
		return feature.NewTestFeature()
	}
	core.NewQuoteEntityFunc = func(client *core.BreakingBadQuotesSDK, entopts map[string]any) core.BreakingBadQuotesEntity {
		return entity.NewQuoteEntity(client, entopts)
	}
}

// Constructor re-exports.
var NewBreakingBadQuotesSDK = core.NewBreakingBadQuotesSDK
var TestSDK = core.TestSDK
var NewContext = core.NewContext
var NewSpec = core.NewSpec
var NewResult = core.NewResult
var NewResponse = core.NewResponse
var NewOperation = core.NewOperation
var MakeConfig = core.MakeConfig

// No-arg convenience constructors. Go has no default-argument syntax,
// so these aliases let callers write `sdk.New()` / `sdk.Test()`
// instead of `sdk.NewBreakingBadQuotesSDK(nil)` / `sdk.TestSDK(nil, nil)`
// for the common no-options case.
func New() *BreakingBadQuotesSDK  { return NewBreakingBadQuotesSDK(nil) }
func Test() *BreakingBadQuotesSDK { return TestSDK(nil, nil) }
var NewBaseFeature = feature.NewBaseFeature
var NewTestFeature = feature.NewTestFeature
