export interface Quote {
    author: string;
    id?: string;
    quote: string;
}
export interface QuoteLoadMatch {
    id: number;
}
export interface QuoteListMatch {
    author?: string;
    id?: string;
    quote?: string;
}
