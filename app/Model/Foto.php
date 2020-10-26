<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Foto extends Model
{
    protected $table = 'fotos';
    protected $primaryKey = 'id';
    public $timestamps = true;

    protected $fillable = [
        'judul', 'foto', 'kategori', 'slug', 'status'
    ];
    protected $hidden = [
        'judul', 'foto', 'kategori', 'slug', 'status'
    ];
}
