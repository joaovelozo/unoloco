<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Pagina extends Model
{
    use HasSlug;


    protected $fillable = [
        'url', 
        'subtitle',
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
            'title' => "required|min:3|max:250",
            'subtitle' => 'required|min:3|max:100',
            'url' => "required|min:3|max:100, unique:paginas,url,{$id}, id",
            'description' => 'required|min:50|max:11000',
            'pcategoria_id' => 'required',
            'banner'=>"image",
            'image' =>"image",
           
        ];
    }
}