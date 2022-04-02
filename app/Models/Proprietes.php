<?php

namespace App\Models;

use Illuminate\Support\Str;
use App\Models\Proprietaire;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Proprietes extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function proprietaire()
    {
        return $this->belongsTo(Proprietaire::class);
    }

    public function typeProprietes()
    {
        return $this->belongsTo(TypeProprietes::class);
    }

    public function getTitleAttribut($attribute)
    {
        return Str::title($attribute);
    }

}
