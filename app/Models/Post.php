<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Post extends Model
{
    use HasSlug;

    protected $fillable = [
        'title', 
        'url',
        'description',
        'user_id', 
        'categoria_id',
        'date', 
        'hour', 
        'featured', 
        'slug'];

    public function getSlugOptions() : SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('title')
            ->saveSlugsTo('slug');
    }

    public function rules()
    {
        return  [
            'title' => 'required|min:3|max:250', 
            'description' => 'required|min:50|max:1000',
            'categorias_id' => 'required',
            'date' => 'required|date', 
            'hour' => 'required', 
           
        ];
    }

}
