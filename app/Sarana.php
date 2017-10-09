<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sarana extends Model
{
    public $timestamps = false;

    protected $table = 'sarana';

    protected $keyType = 'string';

    protected $fillable = ['id', 'nama', 'keterangan', 'foto' ];
}
