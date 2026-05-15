<?php
declare(strict_types=1);

// BreakingBadQuotes SDK base feature

class BreakingBadQuotesBaseFeature
{
    public string $version;
    public string $name;
    public bool $active;

    public function __construct()
    {
        $this->version = '0.0.1';
        $this->name = 'base';
        $this->active = true;
    }

    public function get_version(): string { return $this->version; }
    public function get_name(): string { return $this->name; }
    public function get_active(): bool { return $this->active; }

    public function init(BreakingBadQuotesContext $ctx, array $options): void {}
    public function PostConstruct(BreakingBadQuotesContext $ctx): void {}
    public function PostConstructEntity(BreakingBadQuotesContext $ctx): void {}
    public function SetData(BreakingBadQuotesContext $ctx): void {}
    public function GetData(BreakingBadQuotesContext $ctx): void {}
    public function GetMatch(BreakingBadQuotesContext $ctx): void {}
    public function SetMatch(BreakingBadQuotesContext $ctx): void {}
    public function PrePoint(BreakingBadQuotesContext $ctx): void {}
    public function PreSpec(BreakingBadQuotesContext $ctx): void {}
    public function PreRequest(BreakingBadQuotesContext $ctx): void {}
    public function PreResponse(BreakingBadQuotesContext $ctx): void {}
    public function PreResult(BreakingBadQuotesContext $ctx): void {}
    public function PreDone(BreakingBadQuotesContext $ctx): void {}
    public function PreUnexpected(BreakingBadQuotesContext $ctx): void {}
}
