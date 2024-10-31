<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculatorBMI extends Controller
{
    public function calculator()
    {
        return view('calculatorBMI');
    }
}
