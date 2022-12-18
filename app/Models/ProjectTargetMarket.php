<?php

namespace App\Models;

use App\Models\admin\Project;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectTargetMarket extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function project()
    {
        return $this->belongsTo(Project::class);
    }
}
