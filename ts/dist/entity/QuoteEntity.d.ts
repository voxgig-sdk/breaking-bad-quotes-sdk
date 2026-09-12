import { BreakingBadQuotesEntityBase } from '../BreakingBadQuotesEntityBase';
import type { BreakingBadQuotesSDK } from '../BreakingBadQuotesSDK';
import type { Control } from '../types';
import type { Quote, QuoteLoadMatch, QuoteListMatch } from '../BreakingBadQuotesTypes';
declare class QuoteEntity extends BreakingBadQuotesEntityBase<Quote> {
    constructor(client: BreakingBadQuotesSDK, entopts: any);
    make(this: QuoteEntity): QuoteEntity;
    load(this: any, reqmatch?: QuoteLoadMatch, ctrl?: Control): Promise<QuoteEntity>;
    list(this: any, reqmatch?: QuoteListMatch, ctrl?: Control): Promise<QuoteEntity[]>;
}
export { QuoteEntity };
