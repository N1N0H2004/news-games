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


    public function addImages(array $images)
    {
        $existingImages = $this->foto ? explode('|', $this->foto) : [];
        $images = array_merge($existingImages, $images);
        $this->update(['foto' => implode('|', $images)]);
    }

    /**
     * Retrieve multiple images associated with the collection.
     *
     * @return array
     */
    public function getImages()
    {
        return !empty($this->foto) ? explode('|', $this->foto) : [];
    }
}
