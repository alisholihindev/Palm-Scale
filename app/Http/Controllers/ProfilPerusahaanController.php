<?php

namespace App\Http\Controllers;

use App\ProfilPerusahaan;
use Illuminate\Http\Request;
use App\Http\Controllers\Traits\CrudTrait;
use App\Http\Controllers\Traits\ListTrait;
use App\Http\Requests\ProfilPerusahaanRequest;

class ProfilPerusahaanController extends Controller
{
    protected $paginate = 10;
    
    public function __construct(ProfilPerusahaan $model)
    {
        $this->title            = 'Profil Perusahaan';
        $this->role             = ['admin'];
        $this->model            = $model;
        $this->model_request    = ProfilPerusahaanRequest::class;
        $this->relation         = [];
    }

    public function formData()
    {
        return [
            // isi list atau filter
        ];
    }
}
