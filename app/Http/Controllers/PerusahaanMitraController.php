<?php

namespace App\Http\Controllers;

use App\PerusahaanMitra;
use Illuminate\Http\Request;
use App\Http\Requests\PerusahaanMitraRequest;

class PerusahaanMitraController extends Controller
{
    protected $paginate = 10;
    
    public function __construct(PerusahaanMitra $model)
    {
        $this->title            = 'Perusahaan Mitra';
        $this->role             = ['admin'];
        $this->model            = $model;
        $this->model_request    = PerusahaanMitraRequest::class;
        $this->relation         = [];
    }

    public function formData()
    {
        return [
            // isi list atau filter
        ];
    }
}
