<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;

    protected $fillable = [
        'naam',
        'beschrijving',
        'foto',
        'tag_id',
    ];

    // Relatie met Tag model
    public function tag()
    {
        return $this->belongsTo(Tag::class);
    }
}
