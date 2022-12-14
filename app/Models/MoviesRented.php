<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MoviesRented extends Model
{
    use HasFactory;

    protected $table = 'movies_rented';

    protected $fillable = [
        'movie_id',
        'user_id',
        'expiration_date',
        'movie_name',
    ];

    protected $casts = [
        'expiration_date' => 'date',
    ];

    public function lodger_user()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }
}
