<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class LeverantModel extends Model
{
    public function sp_GetLeverantieInfo($id)
    {
        return DB::select('CALL sp_GetLeverantieInfo(?)', [$id]);
    }

     public function sp_GetLeverancierInfo($id) {
        return DB::select('CALL sp_GetLeverancierInfo(?)', [$id]);
    }
}
