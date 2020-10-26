<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    protected $table = 'videos';
    protected $primaryKey = 'id';
    public $timestamps = true;

    protected $fillable = [
        'judul', 'video', 'kategori', 'slug', 'status'
    ];
    protected $hidden = [
        'judul', 'video', 'kategori', 'slug', 'status'
    ];
}
