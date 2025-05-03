<?php

namespace App\Domains\TaxRates;

interface CalculateTaxRateInterface {
    function tax(float $amount): float;
}