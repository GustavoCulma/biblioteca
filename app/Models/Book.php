<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    protected $guarded = ['id','created_at','updated_at'];

    //relación uno a muchos inversa
    public function editorial()
    {
        return $this->belongsTo(Editorial::class);
    }

    //muchos a muchos con la tabla author
    public function authors()
    {
        return $this->belongsToMany(Author::class);
    }

    //URL AMIGABLES
    public function getRouteKeyName()
    {
        return 'slug';
    }
}
