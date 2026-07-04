# BreakingBadQuotes SDK configuration


def make_config():
    return {
        "main": {
            "name": "BreakingBadQuotes",
        },
        "feature": {
            "test": {
        "options": {
          "active": False,
        },
      },
        },
        "options": {
            "base": "https://api.breakingbadquotes.xyz/v1",
            "headers": {
        "content-type": "application/json",
      },
            "entity": {
                "quote": {},
            },
        },
        "entity": {
      "quote": {
        "fields": [
          {
            "active": True,
            "name": "author",
            "req": True,
            "type": "`$STRING`",
            "index$": 0,
          },
          {
            "active": True,
            "name": "quote",
            "req": True,
            "type": "`$STRING`",
            "index$": 1,
          },
        ],
        "name": "quote",
        "op": {
          "list": {
            "input": "data",
            "name": "list",
            "points": [
              {
                "active": True,
                "args": {},
                "method": "GET",
                "orig": "/quotes",
                "parts": [
                  "quotes",
                ],
                "select": {},
                "transform": {
                  "req": "`reqdata`",
                  "res": "`body`",
                },
                "index$": 0,
              },
            ],
            "key$": "list",
          },
          "load": {
            "input": "data",
            "name": "load",
            "points": [
              {
                "active": True,
                "args": {
                  "params": [
                    {
                      "active": True,
                      "example": 5,
                      "kind": "param",
                      "name": "id",
                      "orig": "number",
                      "reqd": True,
                      "type": "`$INTEGER`",
                      "index$": 0,
                    },
                  ],
                },
                "method": "GET",
                "orig": "/quotes/{number}",
                "parts": [
                  "quotes",
                  "{id}",
                ],
                "rename": {
                  "param": {
                    "number": "id",
                  },
                },
                "select": {
                  "exist": [
                    "id",
                  ],
                },
                "transform": {
                  "req": "`reqdata`",
                  "res": "`body`",
                },
                "index$": 0,
              },
            ],
            "key$": "load",
          },
        },
        "relations": {
          "ancestors": [],
        },
      },
    },
    }
