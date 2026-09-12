import { Context } from './Context';
declare class BreakingBadQuotesError extends Error {
    isBreakingBadQuotesError: boolean;
    sdk: string;
    code: string;
    ctx: Context;
    status: number;
    get notFound(): boolean;
    constructor(code: string, msg: string, ctx: Context);
}
export { BreakingBadQuotesError };
