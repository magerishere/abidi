<?php

namespace App\Http\Controllers;

use App\Enums\SessionTypeEnums;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BaseController extends Controller
{
    public function base_all_order_by_desc($model,$orderBy = 'created_at')
    {
        return $model::orderByDesc($orderBy)->get();
    }

    public function base_create($model,array $data)
    {
        if (!isset($data['user_id'])) {
            $data['user_id'] = auth()->id();
        }
        return $model::create($data);
    }

    public function base_find_by_id($model,$id)
    {
        return $model::findOrFail($id);
    }

    public function base_update($model, array $data)
    {
        $model->update($data);
        return $model;
    }

    public function base_update_or_create($model, string $relationName, array $data, array $condition = [])
    {
        if (!isset($data['user_id'])) {
            $data['user_id'] = auth()->id();
        }
        $model->$relationName()->updateOrCreate($condition, $data);
        return $model;
    }

    public function base_update_status($model, $status)
    {
        $model->update([
            'status' => $status
        ]);
        return $model;
    }

    public function base_destroy($model)
    {
        return $model->delete();
    }

    public function base_trash_all_order_by_desc($model,$orderBy = 'created_at')
    {
        return $model::onlyTrashed()->orderByDesc($orderBy)->get();
    }

    public function base_trash_find_by_id($model, $id)
    {
        return $model::withTrashed()->findOrFail($id);
    }

    public function base_trash_restore($model)
    {
        return $model->restore();
    }

    public function base_add_media($model, $media, $collection = 'default')
    {
        if ($model->hasMedia($collection)) {
            $model->clearMediaCollection($collection);
        }
        $model->addMedia($media)
            ->toMediaCollection($collection);

        return $model;
    }

    public function base_get_meta_by_key($model, string $key, $onlyValue = true)
    {
        $meta = $model->meta->where('key', $key)->first();
        return $onlyValue ? @$meta->value : $meta;
    }

    public function base_redirect_back(array $withData = [])
    {
        if (!isset($withData['session_type'])) {
            $withData['session_type'] = SessionTypeEnums::SUCCESS;
        }
        return redirect()->back()->with($withData);
    }


}
