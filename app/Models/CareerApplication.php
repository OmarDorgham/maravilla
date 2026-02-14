<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CareerApplication extends Model
{
    protected $fillable = [
        'full_name', 'email', 'phone', 'position', 'location', 'message',
        'cv_path', 'cv_original_name', 'ip_address'
    ];
}
