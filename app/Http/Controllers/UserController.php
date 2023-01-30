<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Traits\CrudTrait;
use App\Http\Controllers\Traits\ListTrait;
use App\Http\Requests\UserRequest;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    protected $paginate = 10;

    public function __construct(User $model)
    {
        $this->title            = 'User';
        $this->role             = ['admin'];
        $this->model            = $model;
        $this->model_request    = UserRequest::class;
        $this->relation         = ['roles'];
    }

    public function customStore($data, $model)
    {
        $model->assignRole($data['role_id']);

        return true;
    }

    public function customUpdate($data, $model)
    {
        if (!empty($data['role_id'])) {
            $model->roles()->sync($data['role_id']);
        } else {
            $model->roles()->detach();
        }

        return true;
    }

    public function customDestroy($model)
    {
        $model->roles()->detach();

        return true;
    }

    public function customItemEdit($model)
    {
        $model->role_id = $model->roles->first()->id;

        return $model;
    }

    public function formData()
    {
        return [
            // isi list atau filter
            'list_role'         => $this->listRole(),
        ];
    }

    public function customRequest($request)
    {
        return [
            'name'          => $request->name,
            'email'         => $request->email,
            'password'      => Hash::make($request->password),
            'role_id'       => $request->role_id,
        ];
    }
}
