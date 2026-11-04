# frozen_string_literal: true

# Typed models for the BreakingBadQuotes SDK.
#
# GENERATED from the API model: main.kit.entity.<e>.fields{} and per-op
# params (op.<name>.points[].g.params[]). Member types come from the
# canonical type sentinels via @voxgig/sdkgen canonToType (source of truth:
# @voxgig/apidef VALID_CANON). Ruby types are unenforced; these YARD
# annotations document the shapes. Do not edit by hand.

# Quote entity data model.
#
# @!attribute [rw] author
#   @return [String]
#
# @!attribute [rw] quote
#   @return [String]
Quote = Struct.new(
  :author,
  :quote,
  keyword_init: true
)

# Request payload for Quote#list.
#
# @!attribute [rw] number
#   @return [Integer]
QuoteListMatch = Struct.new(
  :number,
  keyword_init: true
)

