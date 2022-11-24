<?php

namespace App\Services;

use App\Models\Sales;
use Illuminate\Http\Request;

class SalesService
{
    public function __construct(Sales $sales)
    {
        $this->sales = $sales;
    }

    public function handleShowSales($id)
    {
        return $this->sales->find($id);
    }

    public function handleShowSalesRate($sales)
    {
        $rate       = collect();
        $salesRate  = $sales->rate;
        $unRate     = 5 - $salesRate;
        
        for ($i = 0; $i < $salesRate; $i++) {
            $rate->push(true);
        }

        for ($i = 0; $i < $unRate; $i++) {
            $rate->push(false);
        }

        return $rate;
    }
}
