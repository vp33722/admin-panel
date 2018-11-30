<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Application;
use App\Appuser;

class Plateform extends Model
{
    protected $table='plateform';

	public function applications()
    {
    	return $this->hasMany(Application::class,'app_platform_id','id');
    }

    
}
