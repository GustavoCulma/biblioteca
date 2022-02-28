<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Editorial extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'campus', 'slug', 'image'];

    //relación uno a muchos
    public function books()
    {
        return $this->hasMany(Book::class);
    }
    //URL AMIGABLES
    public function getRouteKeyName()
    {
        return 'slug';
    }
}
