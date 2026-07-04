# Typed models for the BreakingBadQuotes SDK.
#
# GENERATED from the API model: main.kit.entity.<e>.fields[] and per-op
# params (op.<name>.points[].args.params[]). Field/param types come from the
# canonical type sentinels via @voxgig/sdkgen canonToType (source of truth:
# @voxgig/apidef VALID_CANON). Do not edit by hand.

from __future__ import annotations

from dataclasses import dataclass
from typing import Optional, Any


@dataclass
class Quote:
    author: str
    quote: str


@dataclass
class QuoteLoadMatch:
    id: int


@dataclass
class QuoteListMatch:
    author: Optional[str] = None
    quote: Optional[str] = None

