<?php

namespace App\Http\Controllers;

use App\Useradmin;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use DB;

class UseradminController extends Controller
{
    // register
    public function register(Request $request) {
        $validatedData = $request->validate([
            'username' => 'required',
            'email' => 'required|unique:users|max:190',
        ]);
            
        // print_r($validatedData);

        DB::table('useradmins')->insert($validatedData);
        return "OK";
    }

    public function getuseradmindata()
    {
        $auth_model = new Useradmin();
        $result = $auth_model->getuseradmindata();
        return response()->json(array('products' => $result));
    }

    public function user_del($id) {
        DB::table('useradmins')->where('id', $id)->delete();
        return "del";
    }
}
