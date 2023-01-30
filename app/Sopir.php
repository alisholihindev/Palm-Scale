<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sopir extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nama', 'alamat', 'no_plat',
    ];

    // Scope
    public function scopeFilter($query, $request)
    {
        if ($request->has('search') && $request->search !== null) {
            $query->where(function ($query) use ($request)
            {
                $query->where('nama','LIKE','%'.$request->search.'%');
            });
        }
        return $query;
    }
}
