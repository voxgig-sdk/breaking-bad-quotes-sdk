import { QuoteEntity } from './entity/QuoteEntity';
export type * from './BreakingBadQuotesTypes';
import { inspect } from 'node:util';
import type { Context, Feature } from './types';
import { config } from './Config';
import { BreakingBadQuotesEntityBase } from './BreakingBadQuotesEntityBase';
import { Utility } from './utility/Utility';
import { BaseFeature } from './feature/base/BaseFeature';
declare const stdutil: Utility;
type DirectResult = {
    ok: false;
    err: any;
    status?: undefined;
    headers?: undefined;
    data?: undefined;
} | {
    ok: boolean;
    status: number;
    headers: any;
    data: any;
    err?: any;
};
declare class BreakingBadQuotesSDK {
    _mode: string;
    _options: any;
    _utility: Utility;
    _features: Feature[];
    _rootctx: Context;
    constructor(options?: any);
    options(): any;
    utility(): any;
    prepare(fetchargs?: any): Promise<any>;
    direct(fetchargs?: any): Promise<DirectResult>;
    _rawRequest(fetchargs?: any): Promise<DirectResult>;
    graphql(query: string, variables?: any, ctrl?: any): Promise<any>;
    Quote(entopts?: Record<string, any>): QuoteEntity;
    static test(testoptsarg?: any, sdkoptsarg?: any): BreakingBadQuotesSDK;
    tester(testopts?: any, sdkopts?: any): BreakingBadQuotesSDK;
    toJSON(): {
        name: string;
    };
    toString(): string;
    [inspect.custom](): string;
}
declare const SDK: typeof BreakingBadQuotesSDK;
export { stdutil, config, BaseFeature, BreakingBadQuotesEntityBase, BreakingBadQuotesSDK, SDK, };
export type { DirectResult };
