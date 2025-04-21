<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $fillable = [
        'game_id',
        'file_path',
        'type'
    ];

    public function game()
    {
        return $this->belongsTo(Game::class);
    }
}
