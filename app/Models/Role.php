<?php

namespace App\Models;

use App\Models\User; // ou le chemin correct vers votre modèle User
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Models\Role as SpatieRole;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Role extends Model
{
    use HasFactory;

    protected $fillable = ['name'];
    protected $guard_name = 'web'; // Assurez-vous que cela correspond à votre configuration

    /**
     * Get all users associated with the role.
     *
     * @return BelongsToMany
     */
    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'user_roles');
    }
}