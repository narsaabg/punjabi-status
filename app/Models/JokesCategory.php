<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JokesCategory extends Model
{
    use HasFactory;

    protected $table = 'jokes_categories';
    protected $fillable = [
        'name',
        'slug',
        'tags'
    ];
}
