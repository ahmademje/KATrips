<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dataKelas extends Model
{
    protected $table = 'data_kelas';

    //
    
    public function data_Kereta(){
        return $this->belongsToMany('App\dataKereta');
    }
}
