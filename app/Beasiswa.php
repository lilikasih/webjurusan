<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Beasiswa extends Model
{
    public $timestamps = false;

    protected $table = 'Beasiswa';

    protected $keyType = 'string';

    protected $fillable = ['id', 'nama','tgl', 'isi', 'foto' ];
}
