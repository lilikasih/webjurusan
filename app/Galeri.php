<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Galeri extends Model
{
    public $timestamps = false;

    protected $table = 'galeri';

    protected $keyType = 'string';

    protected $fillable = ['id', 'nama','tanggal', 'foto' ];
}
