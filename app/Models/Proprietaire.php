<?php

namespace App\Models;

use App\Models\Proprietes;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Proprietaire extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function Proprietes()
    {
        return $this->hasMany(Proprietes::class);
    }
}
