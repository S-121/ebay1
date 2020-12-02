<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Useradmin extends Model
{
    public function getuseradmindata()
    {
        $result = DB::table('useradmins')->orderBy('id', 'desc')->take(10)->get();
        return $result;
    }
}
