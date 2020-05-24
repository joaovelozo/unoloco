<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
use Illuminate\Str;

class Post extends Model
{
    use HasSlug;

    protected $fillable = [
        'title', 
        'url',
        'image',
        'description',
        'user_id', 
        'categoria_id',
        'date', 
        'hour', 
        'featured', 
        'slug'
    ];

    public function getSlugOptions() : SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('title')
            ->saveSlugsTo('slug');
    }

    public function rules($id = '')
    {
        return  [
            'title' => "required|min:3|max:250, unique:posts,title,{$id}, id", 
            'url' => "required|min:3|max:100, unique:posts,url,{$id}, id",
            'description' => 'required|min:50|max:11000',
            'categoria_id' => 'required',
            'date' => 'required|date', 
            'hour' => 'required', 
            'image' =>"image",
           
        ];
    }
    //public function getDescriptionCutAttibute($value)

   // {
       // return Str::limit($value, 100);;
   // }

}
