<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GeneralSetting extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'time_zone',
        'currency',
        'date_format',
        'email',
        'phone',
        'address',
        'product_image',
        'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}