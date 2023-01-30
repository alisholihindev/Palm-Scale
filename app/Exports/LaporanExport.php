<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class LaporanExport implements FromView
{
    public function __construct($items, $jenis_laporan)
    {
        $this->items = $items;
        $this->jenis_laporan = $jenis_laporan;
    }   
    // /**
    // * @return \Illuminate\Support\Collection
    // */
    // public function collection()
    // {
    //     return AgendaSurat::all();
    // }
    public function view(): View
    {
        return view('admin.pages.laporan.pdf.laporan_'.$this->jenis_laporan, [
            'items' => $this->items,
        ]);
    }
}
