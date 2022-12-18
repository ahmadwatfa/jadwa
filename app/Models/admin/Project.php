<?php

namespace App\Models\admin;

use App\Models\ProjectBpDetails;
use App\Models\ProjectBusinessPlan;
use App\Models\ProjectCompatitor;
use App\Models\ProjectProductDetail;
use App\Models\ProjectTargetMarket;
use App\Models\ProjectType;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Auth;

class Project extends Model
{
    
    use HasFactory ,SoftDeletes;
    
    protected $guarded = [];  

    public $timestamps = true;

    // protected $fillabel = [];

    // protected $start_date =' datetime:m/d/y';
        public function user(){
        return $this->belongsTo(User::class , "owner_id" , "id");
    }

    public function projectType(){
        return $this->belongsTo(ProjectType::class );
    }

    // public function ProjectBpDetails()
    // {
    //     return $this->hasMany(ProjectBpDetails::class  , 'project_id');
    // }
    public function ProjectTargetMarket()
    {
        return $this->hasMany(ProjectTargetMarket::class  , 'project_id');
    }
    public function ProjectCompatitor()
    {
        return $this->hasMany(ProjectCompatitor::class  , 'project_id');
    }
    public function ProjectSalesChannels()
    {
        return $this->hasMany(ProjectBusinessPlan::class,'project_id')->where('type','sales_channels');
    }
    public function ProjectGoals()
    {
        return $this->hasMany(ProjectBusinessPlan::class,'project_id')->where('type','goals');
    }
    // public function setCreatedByAttribute() {
    //     $this->created_by = Auth::user()->id;
    // }

    // public function getStartDateAtAttribute($start_date) {
    //     return Carbon::parse($start_date)->format('m/d/Y');
    // }
}
