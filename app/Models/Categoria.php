<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Categoria extends Model
{
    use HasSlug;

    protected $fillable = ['name', 'url','description','image' ,'slug'];

    public function getSlugOptions() : SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('name')
            ->saveSlugsTo('slug');
    }

    public function rules($id = '')
    {
        return [
            'name' => 'required|min:3|max:100',
            'url' => "required|min:3|max:100|unique:categorias,url,{$id},id",
            'description' => "required|min:3|max:100",
            'image' => 'image',
        ];
  
    }
  

    public function posts()

    {
        return $this->hasMany(\App\Models\Post::class);
    }
}
