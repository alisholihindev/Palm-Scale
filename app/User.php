<?php

namespace App;

use App\Checklist;
use App\Models\UserLog;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use Notifiable;
    use HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    // Relation
    public function userLog()
    {
        return $this->hasMany(UserLog::class);
    }

    public function checkList()
    {
        return $this->hasMany(Checklist::class);
    }
    // 

    // Scope
    public function scopeFilter($query, $request)
    {
        if ($request->has('search') && $request->search !== null) {
            $query->where(function ($query) use ($request)
            {
                $query->where('name','LIKE','%'.$request->search.'%')
                      ->orWhere('email','LIKE','%'.$request->search.'%');
            });
        }
        return $query;
    }

    // Get Attribute
    public function getLastLoginAttribute()
    {
        return \Carbon\Carbon::parse($this->getAttribute('updated_at'))->format('d F Y H:i:s');
    }
}
