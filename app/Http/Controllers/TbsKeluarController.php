<?php

namespace App\Http\Controllers;

use PDF;
use App\Sopir;
use App\TbsKeluar;
use Illuminate\Http\Request;
use App\Http\Requests\TbsKeluarRequest;

class TbsKeluarController extends Controller
{
    protected $paginate = 10;
    
    public function __construct(TbsKeluar $model)
    {
        $this->title            = 'TBS Keluar';
        $this->role             = ['admin'];
        $this->model            = $model;
        $this->model_request    = TbsKeluarRequest::class;
        $this->relation         = ['sopir'];
    }

    public function formData()
    {
        return [
            // isi list atau filter
            'list_sopir'         => $this->listSopir(),
        ];
    }

    public function cetak($id)
    {
        $data = $this->model->find($id);
        $pdf = PDF::loadView('pdf.surat-jalan', ['data' => $data]);
        return $pdf->stream('nota-'.$data->sopir->nama.'.pdf');
    }

    public function customRequest($request)
    {
        $sopir = Sopir::find($request->sopir_id);
        
        if($sopir == null){
            $sopir = Sopir::create(['nama'=>$request->sopir_id]);
            $request->merge([
                'sopir_id' => $sopir->id
            ]);
        }
        return $request->all();
    }
}
