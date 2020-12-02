<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Product extends Model
{

    public function create($request)
    {
//        print_r($request);
        $result = DB::table('product')->get();
        for ($i = 0; $i < count($result); $i++){
            if($result[$i]->itemId  == $request['itemId']){
                return;
            }
        }
        DB::table('product')->insert($request);
    }

    public function getProduct()
    {
        $result = DB::table('product')->orderBy('id', 'desc')->take(10)->get();
        echo $result;
    }
}
