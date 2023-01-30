<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TbsMasuk extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'tanggal_jam', 
        'sopir_id', 
        'harga',
        'potongan',
        'gross',
        'tara',
        'netto_1',
        'netto_2',
        'total_biaya',
        'biaya_bongkar',
        'total_biaya_bongkar',
        'total_akhir',
    ];

    public function sopir()
    {
        return $this->belongsTo('App\Sopir');
    }

    public function getTanggalAttribute()
    {
        return date("d-M-Y",strtotime($this->tanggal_jam));
    }

    public function getJamAttribute()
    {
        return date("H:i",strtotime($this->tanggal_jam));
    }

    // Scope
    public function scopeFilter($query, $request)
    {
        if ($request->has('search') && $request->search !== null) {
            $query->where(function ($query) use ($request)
            {
                $query->where('tanggal','LIKE','%'.$request->search.'%');
            });
        }
        return $query;
    }

    public function getNotaIdAttribute()
    {
        return str_pad($this->id, 2, '0', STR_PAD_LEFT);
    }
}
