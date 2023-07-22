<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'gender',
        'city',
    ];

    public function teams()
    {
        return $this->hasOne(Teams::class);
    }
}
