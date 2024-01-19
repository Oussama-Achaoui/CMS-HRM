<?php

namespace App\Exports;

use App\Models\BusinessCard;
use Maatwebsite\Excel\Concerns\FromCollection;

class BusinessCardsExport implements FromCollection
{
    public function collection()
    {
        return BusinessCard::all();
    }

    public static function getData()
    {
        // Logic to fetch business card data
        return BusinessCard::all();
    }
}
