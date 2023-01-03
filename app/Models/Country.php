<?php

namespace App\Models;

use App\Models\admin\Project;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;

    public function Project()
    {
        return $this->hasMany(Project::class , 'country');
    }
    
}
