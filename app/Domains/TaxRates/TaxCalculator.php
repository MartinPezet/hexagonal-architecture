<?php

namespace App\Domains\TaxRates;

class TaxCalculator implements CalculateTaxRateInterface {
    private GetTaxRateInterface $taxRateRepository;

    public function __construct(GetTaxRateInterface $taxRateRepository)
    {
        $this->taxRateRepository = $taxRateRepository;
    }

    public function tax(float $amount): float 
    {
        return $amount * $this->taxRateRepository->getRate($amount);
    }
}