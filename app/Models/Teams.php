<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teams extends Model
{
    use HasFactory;



    protected $fillable = [
        'name',
        'player_id'
    ];

    // public function player()
    // {
    //     return $this->belongsTo(Player::class);
    // }

    

    
    public function playerWithTeam()
    {
        return $this->hasMany(Player::class);
    }


}
