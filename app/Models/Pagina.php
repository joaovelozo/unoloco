<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Pagina extends Model
{
    use HasSlug;


    protected $fillable = [
        'name', 
        'title',
        'banner', 
        'image',  
        'description', 
        'slug', 
        'pcategoria_id']  ;

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
            'name' => 'required|min:5|max:100',
            'description' => 'required|min:50|max:11000',
            'pcategoria_id' => 'required',
            'banner'=>"image",
            'image' =>"image",
           
        ];
    }
}