<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    public $timestamps = false;

    protected $table = 'dosen';

    protected $keyType = 'string';

    protected $fillable = ['id', 'nama','prodi', 'foto' ];
}
