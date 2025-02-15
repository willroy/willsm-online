<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tag extends Model
{
    use SoftDeletes;

    protected $table = 'tag';
    protected $primaryKey = 'id';
    protected $keyType = 'string';
    public $incrementing = false;

    public function mediaItems(): BelongsToMany
    {
        return $this->belongsToMany(MediaItem::class);
    }
}
