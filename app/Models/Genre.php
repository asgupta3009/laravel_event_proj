<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    use HasFactory;

    protected $table = 'genre';

    public function eventRelation()
    {

        return $this->hasMany(Events::class, 'genre_id');
    }
}
