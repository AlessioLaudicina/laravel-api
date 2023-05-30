<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Post extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'cover_image',
        'content',
        'slug',
        'type_id'
    ];
    public static function generateSlug(string $title) {
        return Str::slug($title, '-');
    }
    public function type(){
        return $this->belongsTo(Type::class);
    }

    public function technologies(){
        return $this->belongsToMany(Technology::class);
    }


}
