<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class BaseController extends Controller
{
    public function base_create(Model $model,array $data)
    {
        return $model::create($data);
    }

    public function base_find_by_id(Model $model,$id)
    {
        return $model::findOrFail($id);
    }

    public function base_update(Model $model,array $data)
    {
        $model->update($data);
        return $model;
    }

    public function base_redirect_back(array $withData)
    {
        $withData['message'] = __('messages.success_submit');
        return redirect()->back()->with($withData);
    }


}
