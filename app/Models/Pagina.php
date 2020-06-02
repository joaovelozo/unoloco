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
        'banner_text',
        'image',
        'description',
        'slug',]  ;

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
            'banner'=>"image",
            'image' =>"image",

        ];
    }

    public function last($text) {
        $pieces = explode(' ', $text);
        return array_pop($pieces);
    }

    public function firstletter($text) {
        $pieces = explode(' ', $text);
        return $pieces[0];
    }

    public function rest($text, $first = false) {
        $pieces = explode(' ', $text);
        if (count($pieces) > 1) {
            if ($first) {
                array_shift($pieces);
            } else {
                array_pop($pieces);
            }
            return implode(' ', $pieces);
        } else {
            return '';
        }
    }

}
