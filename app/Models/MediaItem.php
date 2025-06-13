<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MediaItem extends Model
{
    use SoftDeletes;

    protected $table = 'media_item';
    protected $primaryKey = 'id';
    protected $keyType = 'string';
    public $incrementing = false;

    public function tags(): BelongsToMany
    {
        return $this->belongsToMany(Tag::class);
    }
}
