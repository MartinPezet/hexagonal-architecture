<?php

namespace App\Domains\TaxRates;

class VariableTaxRateRepository implements GetTaxRateInterface {
    public function getRate(float $amount): float 
    {
        if($amount > 1000){
            return 0.2;
        }
        return 0.15;
    }
}