<?php

namespace App\Http\Controllers;

use App\NotaPenimbanganTbs;
use Illuminate\Http\Request;
use App\Http\Requests\NotaPenimbanganTbsRequest;

class NotaPenimbanganTbsController extends Controller
{
    protected $paginate = 10;
    
    public function __construct(NotaPenimbanganTbs $model)
    {
        $this->title            = 'Nota Penimbangan TBS';
        $this->role             = ['admin'];
        $this->model            = $model;
        $this->model_request    = NotaPenimbanganTbsRequest::class;
        $this->relation         = ['tbsKeluar','perusahaanMitra'];
    }

    public function formData()
    {
        return [
            // isi list atau filter
            'list_perusahaan_mitra'         => $this->listPerusahaanMitra(),
            'list_tbs_keluar'         => $this->listTbsKeluar(),
        ];
    }
}
