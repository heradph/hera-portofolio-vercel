<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    /** @use HasFactory<\Database\Factories\ProjectFactory> */
    use HasFactory;
    protected $fillable = ['title', 'thumbnail', 'slug', 'description', 'body'];

    public function technologies()
    {
        return $this->belongsToMany(Technology::class, 'project_technology');
    }
    
    public function images()
    {
        return $this->belongsToMany(Image::class, 'project_images');
    }

}
