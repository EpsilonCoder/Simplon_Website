<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class categorie extends Model
{
    use HasFactory;
    public function formation(): HasMany
    {
        return $this->hasMany(formation::class);
    }
}
