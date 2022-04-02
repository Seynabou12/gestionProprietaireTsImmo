<?php

namespace App\Models;



use App\Models\Proprietes;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TypeProprietes extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function typeProprietes()
    {
        return $this->hasMany(Proprietes::class);
    }
}
