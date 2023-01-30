<?php

namespace App\Http\Controllers;

use PDF;
use App\Sopir;
use App\TbsMasuk;
use Illuminate\Http\Request;
use App\Http\Requests\TbsMasukRequest;
use App\Http\Controllers\Traits\CrudTrait;
use App\Http\Controllers\Traits\ListTrait;

class TbsMasukController extends Controller
{
    protected $paginate = 10;
    
    public function __construct(TbsMasuk $model)
    {
        $this->title            = 'TBS Masuk';
        $this->role             = ['admin'];
        $this->model            = $model;
        $this->model_request    = TbsMasukRequest::class;
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
        $pdf = PDF::loadView('pdf.nota-pembelian', ['data' => $data]);
        return $pdf->stream('Nota Pembelian-'.$data->sopir->nama.'-'.$data->tanggal.'.pdf');
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
