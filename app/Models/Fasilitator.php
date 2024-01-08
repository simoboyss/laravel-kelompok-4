<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fasilitator extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function peserta()
    {
        return $this->hasMany(Peserta::class);
    }
}
