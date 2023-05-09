<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Role extends Model
{
    use HasFactory;

    // customise timestamp fields
//    const CREATED_AT = 'creation_date';
//    const UPDATED_AT = 'updated_date';

    public function users(): BelongsToMany
    {
//        return $this->belongsToMany(User::class)->using(RoleUser::class)->withTimestamps();
        return $this->belongsToMany(User::class)->withTimestamps();
    }
}
