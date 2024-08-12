<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'phone',
        'country_id',
        'state_id',
        'address',
        'description',
        'image',
        'user_id'
    ];

    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    public function state()
    {
        return $this->belongsTo(State::class);
    }

    // Définissez la relation avec le modèle User
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}