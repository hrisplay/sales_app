<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\SalesService;

class SalesController extends Controller
{
    public function __construct(SalesService $salesService)
    {
        $this->salesService = $salesService;
    }

    public function show ($id) {
        $sales = $this->salesService->handleShowSales($id);
        $rate = $this->salesService->handleShowSalesRate($sales);

        return view('sales', [
            'sales' => $sales,
            'rate' => $rate,
        ]);
    }
}
