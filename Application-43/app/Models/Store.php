<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'username',
        'password',
        'phone',
        'email',
        'image',
        'user_id'
    ];

    protected $hidden = [
        'password',
    ];

    // Définissez la relation avec le modèle User
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}