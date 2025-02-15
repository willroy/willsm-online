<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MediaItem extends Model
{
    protected $table = 'media_item';
    protected $primaryKey = 'id';
    protected $keyType = 'string';
    public $incrementing = false;


    public function tags(): BelongsToMany
    {
        return $this->belongsToMany(Tag::class);
    }
}
