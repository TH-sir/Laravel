<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\NoticeDome;
use Illuminate\Http\Request;

class NoticeDomeController extends Controller {

    /**
     * 展示分类信息
     * @return type
     */
    public function index()
    {
        $query = NoticeDome::query();
        if ($name = request('name')) {
            $query->where('name', 'like', "%{$name}%");
        }
        $models = $query->paginate(10);
        return view('admin.notice-dome.index', [
            'models' => $models
        ]);
    }

    /**
     * 添加公告分类信息
     * @return type
     */
    public function create(Request $request)
    {
        if ($request->isMethod('post')) {
            $model = new NoticeDome();
            if ($model->validator($request->all())->validate()) {
                $model->name = $request->name;
                $model->brief = $request->brief;
                if ($model->save()) {
                    return redirect('/admin/notice-dome/index');
                }
            }
        }
        return view('admin.notice-dome.create');
    }

    /**
     * 添加公告分类信息
     * @return type
     */
    public function update(Request $request, $id)
    {
        $model = NoticeDome::find($id);
        if(!$model){
            return response()->view('errors.503');
        }
        if ($request->isMethod('post')) {
            if ($model->validator($request->all())->validate()) {
                $model->name = $request->name;
                $model->brief = $request->brief;
                if ($model->save()) {
                    return redirect('/admin/notice-dome/index');
                }
            }
        }
        return view('admin.notice-dome.update', [
            'model' => $model
        ]);
    }

    /**
     * 添加公告分类信息
     * @return type
     */
    public function delete($id)
    {
        $model = NoticeDome::find($id);
        if(!$model){
            return response()->view('errors.503');
        }
        $model->delete();
        return redirect('admin/notice-dome/index');
    }

}
