<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;


class proveedores extends Model
{
    use HasFactory;
    public function facturas():HasMany
    {
        return $this->hasMany(facturas::class);
    }

    public function constructoras():HasMany
    {
        return $this->hasMany(constructoras::class);
    }
}

