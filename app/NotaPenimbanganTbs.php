<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NotaPenimbanganTbs extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'tanggal', 
        'tbs_keluar_id',
        'perusahaan_mitra_id',
        'harga',
        'gross',
        'tara',
        'netto',
        'pendapatan',
    ];

    protected $appends = ['tgl','pembeli'];

    public function perusahaanMitra()
    {
        return $this->belongsTo('App\PerusahaanMitra','perusahaan_mitra_id');
    }

    public function tbsKeluar()
    {
        return $this->belongsTo('App\TbsKeluar');
    }

    public function getTglAttribute()
    {
        return date("d-M-Y",strtotime($this->tanggal));
    }

    public function getPembeliAttribute()
    {
        return $this->perusahaanMitra->nama;
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
