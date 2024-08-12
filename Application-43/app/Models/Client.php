<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $fillable = [
        // 'gender',
        'phone',
        'dateofbirth',
        'current_address',
        'permanent_address',
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}