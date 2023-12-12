<?php

namespace App\Models;

use App\Casts\MoneyCast;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;




class facturas extends Model
{
    use HasFactory;
    protected $casts = [
        "valor"=> MoneyCast::class,
    ];
    public function proveedores():BelongsTo
    {
        return $this->belongsTo(proveedores::class);
    }

    public function constructoras():BelongsTo
    {
        return $this->belongsTo(constructoras::class);
    }

}
