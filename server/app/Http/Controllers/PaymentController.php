<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use DB;

class PaymentController extends Controller
{
    public function payment(Request $request) {
        $validatedData = $request->validate([
            'email' => 'max:254',
            'username' => 'max:254',
            'create_time' => 'max:254',
            'price' => 'max:254'
        ]);
            
        // print_r($validatedData);

        DB::table('payments')->insert($validatedData);
        return "payment";
    }
}
