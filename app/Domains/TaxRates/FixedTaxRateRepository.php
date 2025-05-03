<?php

namespace App\Domains\TaxRates;

class FixedTaxRateRepository implements GetTaxRateInterface {
    public function getRate(float $amount): float 
    {
        return 0.15;
    }
}