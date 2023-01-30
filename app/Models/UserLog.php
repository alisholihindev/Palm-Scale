<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UserLog extends Model
{
	use SoftDeletes;

    protected $table 	= 'user_log';
    protected $fillable = [
    	'user_id',
    	'menu',
    	'log',
    	'action',
    ];

    // relation
    public function user()
    {
    	return $this->belongsTo(User::class, 'user_id');
    }
    // 

    // get attribute
	//

	// scope
	public function scopeFilter($query, $request)
	{
		if ($request->has('search') && $request->search != null) {
			$query->whereHas('user', function ($query) use ($request)
			{
				$query->where('name','LIKE','%'.$request->search.'%');
			})
			->orWhere('menu','LIKE','%'.$request->search.'%')
			->orWhere('action','LIKE','%'.$request->search.'%');
		}

		return $query;
	}
	// 
}
