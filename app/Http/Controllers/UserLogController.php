<?php

namespace App\Http\Controllers;

use App\Models\UserLog;
use Illuminate\Http\Request;

class UserLogController extends Controller
{
    protected $paginate = 10;

    public function __construct(UserLog $model)
    {
        $this->title            = 'User Log';
        $this->role             = ['admin'];
        $this->model            = $model;
        $this->model_request    = null;
        $this->relation         = ['user'];
    }
}
