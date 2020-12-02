<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class BestSellsProduct extends Model
{
    //
    public function create($request)
    {
//        print_r($request);
        $result = DB::table('best_sells_product')->get();
        for ($i = 0; $i < count($result); $i++){
            if($result[$i]->epid  == $request['epid']){
                return;
            }
        }
        DB::table('best_sells_product')->insert($request);
    }

    public function getBestSellsProduct()
    {
        $result = DB::table('best_sells_product')->orderBy('id', 'desc')->take(10)->get();
        return $result;
    }
}
