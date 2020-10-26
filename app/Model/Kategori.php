<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    protected $table = 'kategoris';
    protected $primaryKey = 'id';
    public $timestamps = true;

    protected $fillable = [
        'kategori'
    ];
    protected $hidden = [
        'kategori'
    ];

    public function artikels()
    {
        return $this->hasMany('App\Model\Artikel', 'kategori');
    }
    public function fotos()
    {
        return $this->hasMany('App\Model\Foto', 'kategori');
    }
    public function videos()
    {
        return $this->hasMany('App\Model\Video', 'kategori');
    }
}
