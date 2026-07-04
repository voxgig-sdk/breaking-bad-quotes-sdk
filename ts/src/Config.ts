
import { BaseFeature } from './feature/base/BaseFeature'
import { TestFeature } from './feature/test/TestFeature'



const FEATURE_CLASS: Record<string, typeof BaseFeature> = {
   test: TestFeature

}


class Config {

  makeFeature(this: any, fn: string) {
    const fc = FEATURE_CLASS[fn]
    const fi = new fc()
    // TODO: errors etc
    return fi
  }


  main = {
    name: 'ProjectName',
  }


  feature = {
     test:     {
      "options": {
        "active": false
      }
    }

  }


  options = {
    base: 'https://api.breakingbadquotes.xyz/v1',

    headers: {
      "content-type": "application/json"
    },

    entity: {
      
      quote: {
      },

    }
  }


  entity = {
    "quote": {
      "fields": [
        {
          "active": true,
          "name": "author",
          "req": true,
          "type": "`$STRING`",
          "index$": 0
        },
        {
          "active": true,
          "name": "quote",
          "req": true,
          "type": "`$STRING`",
          "index$": 1
        }
      ],
      "name": "quote",
      "op": {
        "list": {
          "input": "data",
          "name": "list",
          "points": [
            {
              "active": true,
              "args": {},
              "method": "GET",
              "orig": "/quotes",
              "parts": [
                "quotes"
              ],
              "select": {},
              "transform": {
                "req": "`reqdata`",
                "res": "`body`"
              },
              "index$": 0
            }
          ],
          "key$": "list"
        },
        "load": {
          "input": "data",
          "name": "load",
          "points": [
            {
              "active": true,
              "args": {
                "params": [
                  {
                    "active": true,
                    "example": 5,
                    "kind": "param",
                    "name": "id",
                    "orig": "number",
                    "reqd": true,
                    "type": "`$INTEGER`",
                    "index$": 0
                  }
                ]
              },
              "method": "GET",
              "orig": "/quotes/{number}",
              "parts": [
                "quotes",
                "{id}"
              ],
              "rename": {
                "param": {
                  "number": "id"
                }
              },
              "select": {
                "exist": [
                  "id"
                ]
              },
              "transform": {
                "req": "`reqdata`",
                "res": "`body`"
              },
              "index$": 0
            }
          ],
          "key$": "load"
        }
      },
      "relations": {
        "ancestors": []
      }
    }
  }
}


const config = new Config()

export {
  config
}

