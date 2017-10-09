<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    public $timestamps = false;

    protected $table = 'berita';

    protected $keyType = 'string';

    protected $fillable = ['id', 'judul', 'tgl', 'foto', 'isi' ];
}
