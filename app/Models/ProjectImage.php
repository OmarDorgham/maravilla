<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProjectImage extends Model
{
    protected $fillable = ['title', 'description', 'main_image', 'is_featured'];

    public function images() {
        return $this->hasMany(ProjectImage::class);
    }
}
