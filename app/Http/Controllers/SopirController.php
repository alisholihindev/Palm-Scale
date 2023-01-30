<?php

namespace App\Http\Controllers;

use App\Sopir;
use Illuminate\Http\Request;
use App\Http\Requests\SopirRequest;

class SopirController extends Controller
{
    protected $paginate = 10;
    
    public function __construct(Sopir $model)
    {
        $this->title            = 'Sopir';
        $this->role             = ['admin'];
        $this->model            = $model;
        $this->model_request    = SopirRequest::class;
        $this->relation         = [];
    }

    public function formData()
    {
        return [
            // isi list atau filter
        ];
    }
}
