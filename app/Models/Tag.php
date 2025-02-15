<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $table = 'tag';
    protected $primaryKey = 'id';
    protected $keyType = 'string';
    public $incrementing = false;

    public function mediaItems(): BelongsToMany
    {
        return $this->belongsToMany(MediaItem::class);
    }
}
