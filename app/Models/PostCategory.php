<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostCategory extends Model
{
    use HasFactory;

    protected $fillable = [
      'title',
      'parent_id',
    ];

    public function parentCategory () {
        return $this->belongsTo(PostCategory::class,'parent_id','id');
    }

    public function getParentTitleAttribute () {
        return $this->parentCategory->title;
    }
}
