<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Aliexpressproduct extends Model
{
    //

    public function getAliexpressProduct()
    {
        $result = DB::table('aliexpressproducts')->orderBy('id', 'desc')->take(10)->get();
        return $result;
    }
}
