# BreakingBadQuotes SDK

Pull random quotes from the cast of Breaking Bad via a tiny free REST API

> TypeScript, Python, PHP, Golang, Ruby, Lua SDKs, a CLI, an interactive REPL, and an MCP server for AI agents — all generated from one OpenAPI spec by [@voxgig/sdkgen](https://github.com/voxgig/sdkgen).

## About Breaking Bad Quotes API

The Breaking Bad Quotes API is a small, free public service that returns random lines spoken by characters from the AMC series *Breaking Bad*. It exposes a single resource type — quotes — over plain HTTP with no authentication required.

What you get from the API:

- A random quote, returned as a quote string and the attributed character/author
- An option to request multiple random quotes in one call by appending a count to the path (for example `/quotes/5`)

Operational notes: the API has no documented authentication, no documented rate limit, and is community-run rather than backed by an official AMC source. Availability has historically been unreliable — consumers should expect occasional downtime and handle errors gracefully. CORS support is not guaranteed, so browser-side use may require a proxy.

## Try it

**TypeScript**
```bash
npm install breaking-bad-quotes
```

**Python**
```bash
pip install breaking-bad-quotes-sdk
```

**PHP**
```bash
composer require voxgig/breaking-bad-quotes-sdk
```

**Golang**
```bash
go get github.com/voxgig-sdk/breaking-bad-quotes-sdk/go
```

**Ruby**
```bash
gem install breaking-bad-quotes-sdk
```

**Lua**
```bash
luarocks install breaking-bad-quotes-sdk
```

## 30-second quickstart

### TypeScript

```ts
import { BreakingBadQuotesSDK } from 'breaking-bad-quotes'

const client = new BreakingBadQuotesSDK({})

// List all quotes
const quotes = await client.Quote().list()
```

See the [TypeScript README](ts/README.md) for the
full guide, or scroll down for the same example in other languages.

## What's in the box

| Surface | Use it for | Path |
| --- | --- | --- |
| **SDK** (TypeScript, Python, PHP, Golang, Ruby, Lua) | App integration | `ts/` `py/` `php/` `go/` `rb/` `lua/` |
| **CLI** | Scripts, CI, ops, one-off API calls | `go-cli/` |
| **MCP server** | AI agents (Claude, Cursor, Cline) | `go-mcp/` |

## Use it from an AI agent (MCP)

The generated MCP server exposes every operation in this SDK as an
[MCP](https://modelcontextprotocol.io) tool that Claude, Cursor or Cline
can call directly. Build and register it:

```bash
cd go-mcp && go build -o breaking-bad-quotes-mcp .
```

Then add it to your agent's MCP config (Claude Desktop, Cursor, etc.):

```json
{
  "mcpServers": {
    "breaking-bad-quotes": {
      "command": "/abs/path/to/breaking-bad-quotes-mcp"
    }
  }
}
```

## Entities

The API exposes one entity:

| Entity | Description | API path |
| --- | --- | --- |
| **Quote** | A single Breaking Bad line attributed to a character; fetched at `GET /quotes` for one random quote or `GET /quotes/{count}` for several. | `/quotes` |

Each entity supports the following operations where available: **load**,
**list**, **create**, **update**, and **remove**.

## Quickstart in other languages

### Python

```python
from breakingbadquotes_sdk import BreakingBadQuotesSDK

client = BreakingBadQuotesSDK({})

# List all quotes
quotes, err = client.Quote(None).list(None, None)

# Load a specific quote
quote, err = client.Quote(None).load(
    {"id": "example_id"}, None
)
```

### PHP

```php
<?php
require_once 'breakingbadquotes_sdk.php';

$client = new BreakingBadQuotesSDK([]);

// List all quotes
[$quotes, $err] = $client->Quote(null)->list(null, null);

// Load a specific quote
[$quote, $err] = $client->Quote(null)->load(
    ["id" => "example_id"], null
);
```

### Golang

```go
import sdk "github.com/voxgig-sdk/breaking-bad-quotes-sdk/go"

client := sdk.NewBreakingBadQuotesSDK(map[string]any{})

// List all quotes
quotes, err := client.Quote(nil).List(nil, nil)
```

### Ruby

```ruby
require_relative "BreakingBadQuotes_sdk"

client = BreakingBadQuotesSDK.new({})

# List all quotes
quotes, err = client.Quote(nil).list(nil, nil)

# Load a specific quote
quote, err = client.Quote(nil).load(
  { "id" => "example_id" }, nil
)
```

### Lua

```lua
local sdk = require("breaking-bad-quotes_sdk")

local client = sdk.new({})

-- List all quotes
local quotes, err = client:Quote(nil):list(nil, nil)

-- Load a specific quote
local quote, err = client:Quote(nil):load(
  { id = "example_id" }, nil
)
```

## Unit testing in offline mode

Every SDK ships a test mode that swaps the HTTP transport for an
in-memory mock, so unit tests run offline.

### TypeScript

```ts
const client = BreakingBadQuotesSDK.test()
const result = await client.Quote().load({ id: 'test01' })
// result.ok === true, result.data contains mock data
```

### Python

```python
client = BreakingBadQuotesSDK.test(None, None)
result, err = client.Quote(None).load(
    {"id": "test01"}, None
)
```

### PHP

```php
$client = BreakingBadQuotesSDK::test(null, null);
[$result, $err] = $client->Quote(null)->load(
    ["id" => "test01"], null
);
```

### Golang

```go
client := sdk.TestSDK(nil, nil)
result, err := client.Quote(nil).Load(
    map[string]any{"id": "test01"}, nil,
)
```

### Ruby

```ruby
client = BreakingBadQuotesSDK.test(nil, nil)
result, err = client.Quote(nil).load(
  { "id" => "test01" }, nil
)
```

### Lua

```lua
local client = sdk.test(nil, nil)
local result, err = client:Quote(nil):load(
  { id = "test01" }, nil
)
```

## How it works

Every SDK call runs the same five-stage pipeline:

1. **Point** — resolve the API endpoint from the operation definition.
2. **Spec** — build the HTTP specification (URL, method, headers, body).
3. **Request** — send the HTTP request.
4. **Response** — receive and parse the response.
5. **Result** — extract the result data for the caller.

A feature hook fires at each stage (e.g. `PrePoint`, `PreSpec`,
`PreRequest`), so features can inspect or modify the pipeline without
forking the SDK.

### Features

| Feature | Purpose |
| --- | --- |
| **TestFeature** | In-memory mock transport for testing without a live server |

Pass custom features via the `extend` option at construction time.

### Direct and Prepare

For endpoints the entity model doesn't cover, use the low-level methods:

- **`direct(fetchargs)`** — build and send an HTTP request in one step.
- **`prepare(fetchargs)`** — build the request without sending it.

Both accept a map with `path`, `method`, `params`, `query`,
`headers`, and `body`. See the [How-to guides](#how-to-guides) below.

## How-to guides

### Make a direct API call

When the entity interface does not cover an endpoint, use `direct`:

**TypeScript:**
```ts
const result = await client.direct({
  path: '/api/resource/{id}',
  method: 'GET',
  params: { id: 'example' },
})
console.log(result.data)
```

**Python:**
```python
result, err = client.direct({
    "path": "/api/resource/{id}",
    "method": "GET",
    "params": {"id": "example"},
})
```

**PHP:**
```php
[$result, $err] = $client->direct([
    "path" => "/api/resource/{id}",
    "method" => "GET",
    "params" => ["id" => "example"],
]);
```

**Go:**
```go
result, err := client.Direct(map[string]any{
    "path":   "/api/resource/{id}",
    "method": "GET",
    "params": map[string]any{"id": "example"},
})
```

**Ruby:**
```ruby
result, err = client.direct({
  "path" => "/api/resource/{id}",
  "method" => "GET",
  "params" => { "id" => "example" },
})
```

**Lua:**
```lua
local result, err = client:direct({
  path = "/api/resource/{id}",
  method = "GET",
  params = { id = "example" },
})
```

## Per-language documentation

- [TypeScript](ts/README.md)
- [Python](py/README.md)
- [PHP](php/README.md)
- [Golang](go/README.md)
- [Ruby](rb/README.md)
- [Lua](lua/README.md)

## Using the Breaking Bad Quotes API

- Upstream: [https://api.breakingbadquotes.xyz/v1](https://api.breakingbadquotes.xyz/v1)
- API docs: [https://freepublicapis.com/breaking-bad-quotes](https://freepublicapis.com/breaking-bad-quotes)

---

Generated from the Breaking Bad Quotes API OpenAPI spec by [@voxgig/sdkgen](https://github.com/voxgig/sdkgen).
