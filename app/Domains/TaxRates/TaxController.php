<?php

namespace App\Domains\TaxRates;

use App\Http\Controllers\Controller;

class TaxController extends Controller
{
    public function getTaxRate()
    {
        /** @var GetTaxRateInterface $taxRepo */
        $taxRepo = new VariableTaxRateRepository();
        /** @var CalculateTaxRateInterface $taxRepo */
        $taxCalculator = new TaxCalculator($taxRepo);
        return $taxCalculator->tax(1500);
    }
}
