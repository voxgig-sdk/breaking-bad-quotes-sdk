package core

type BreakingBadQuotesError struct {
	IsBreakingBadQuotesError bool
	Sdk              string
	Code             string
	Msg              string
	Ctx              *Context
	Result           any
	Spec             any
}

func NewBreakingBadQuotesError(code string, msg string, ctx *Context) *BreakingBadQuotesError {
	return &BreakingBadQuotesError{
		IsBreakingBadQuotesError: true,
		Sdk:              "BreakingBadQuotes",
		Code:             code,
		Msg:              msg,
		Ctx:              ctx,
	}
}

func (e *BreakingBadQuotesError) Error() string {
	return e.Msg
}
