<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;
    protected $fillable = ['name'];

    public function fires()
    {
        return $this->hasMany(Fire::class);
    }

    public function rains()
    {
        return $this->hasMany(Rain::class);
    }
}
