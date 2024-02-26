<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Artikel extends Model
{
    use HasFactory;

    protected $fillable = [
        'titel',
        'inhoud',
        'tag_id',
        'categorie_id',
        'game_id',
    ];

    // Relatie met Tag model
    public function tag()
    {
        return $this->belongsTo(Tag::class);
    }

    // Relatie met Categorie model
    public function categorie()
    {
        return $this->belongsTo(Categorie::class);
    }

    // Relatie met Game model
    public function game()
    {
        return $this->belongsTo(Game::class);
    }
}
