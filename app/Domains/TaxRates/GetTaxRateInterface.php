<?php

namespace App\Domains\TaxRates;

interface GetTaxRateInterface {
    function getRate(float $amount): float;
}