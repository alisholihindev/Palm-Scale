<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TbsKeluar extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'tanggal_jam', 
        'sopir_id', 
        'gross',
        'tara',
        'netto',
    ];

    protected $appends = ['no_surat_jalan'];

    public function notaPenimbanganTbs()
    {
        return $this->hasOne('App\NotaPenimbanganTbs');
    }
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

    public function getNoSuratJalanAttribute()
    {
        return "TAP - ". str_pad($this->id, 4, '0', STR_PAD_LEFT);
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
}
