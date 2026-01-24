<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProjectImage extends Model
{
    protected $fillable = ['title', 'image', 'project_id'];

    public function project()
    {
        return $this->belongsTo(Project::class);
    }
}
