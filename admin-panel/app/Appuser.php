<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Application;
use App\Plateform;

class Appuser extends Model
{
	use SoftDeletes;
	protected $table='appusers';
	protected $dates = ['deleted_at'];
	protected $fillable=['app_id','device_id','country','device_type','os_version','app_version'];
	
    public function application()
	{
	 	return $this->belongsTo(Application::class, 'app_id', 'id');
	}
	
	
    


  
	
	
    
}
