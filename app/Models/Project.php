<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = ['title','slug', 'description', 'main_image', 'is_featured','project_date','client_name'];
    protected $casts = [
        'project_date' => 'date', // أو 'datetime' لو فيه وقت
    ];
    public function images() {
        return $this->hasMany(ProjectImage::class);
    }
}
