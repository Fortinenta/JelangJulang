<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class jelangjulangModel extends Model
{
    use HasFactory;

    public function sesi($hari){
        $query = DB::select("SELECT * FROM sesi WHERE hari = '$hari'");
        return $query;
    }

}
