<?php

namespace App\Http\Controllers;

use App\Aliexpressproduct;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class AliexpressproductController extends Controller
{
    //

    public function getAliexpressProduct()
    {
        $auth_model = new Aliexpressproduct();
        $result = $auth_model->getAliexpressProduct();
        return response()->json(array('products' => $result));
    }
}
