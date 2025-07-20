<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BlogItem extends Model
{
    use SoftDeletes;

    protected $table = 'blog_item';
    protected $primaryKey = 'id';
    protected $keyType = 'string';
    public $incrementing = false;
}
