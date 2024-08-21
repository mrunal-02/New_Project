<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    public function index()
    {
        return view('calculator');
    }

    public function calculate(Request $request)
    {
        $request->validate([
            'number1' => 'required|numeric',
            'number2' => 'required|numeric',
            'operation' => 'required|in:add,subtract,multiply,divide',
        ]);

        $number1 = $request->input('number1');
        $number2 = $request->input('number2');
        $operation = $request->input('operation');
        $result = 0;

        switch ($operation) {
            case 'add':
                $result = $number1 + $number2;
                break;
            case 'subtract':
                $result = $number1 - $number2;
                break;
            case 'multiply':
                $result = $number1 * $number2;
                break;
            case 'divide':
                if ($number2 != 0) {
                    $result = $number1 / $number2;
                } else {
                    return back()->withErrors('Division by zero is not allowed.');
                }
                break;
        }

        return view('calculator', compact('result', 'number1', 'number2', 'operation'));
    }
}
