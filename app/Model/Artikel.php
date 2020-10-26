<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
// use Cviebrock\EloquentSluggable\Sluggable;

class Artikel extends Model
{
    // use Sluggable;
    protected $table = 'artikels';
    protected $primaryKey = 'id';
    public $timestamps = true;

    protected $fillable = [
        'judul', 'artikel', 'kategori', 'slug', 'status', 'foto'
    ];
    protected $hidden = [
        'judul', 'artikel', 'kategori', 'slug', 'status', 'foto'
    ];
    public function slug()
    {
        return [
            'slug' => [
                'source' => 'judul'
            ]
        ];
    }
}
