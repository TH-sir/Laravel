@extends('admin.layouts.main')
@section('title','公告分类信息')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                条件检索
            </header>
            <form method="get" action="{{ url('/admin/notice-dome/index') }}">
                <div class="panel-body">
                    <div class="form-group col-sm-12">
                        <div class="col-sm-4">
                            <label for="inputEmail3" class="col-sm-4 control-label">分类名称</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" placeholder="分类名称" name="name" value="{{ request('name') }}">
                            </div>
                        </div>
                        <div class="col-sm-1 col-sm-offset-1 needmar3">
                            <button class="btn btn-primary btn-find" type="submit">搜索</button>
                        </div>
                    </div>
                </div>
            </form>
        </section>
    </div>
</div>

<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <header class="panel-heading custom-tab tab-white">
                    <ul class="nav nav-tabs">
                        <li class="admap-button pull-right" style="border-right:none">
                            <a class="btn btn-block btn-primary " href="{{url('/admin/notice-dome/create')}}">添加分类</a>
                        </li>
                    </ul>
                </header>
                <div class="box-body">
                    <table class="table table-border table-bordered table-hover table-bg table-sort">
                        <thead>
                            <tr class="text-c">
                                <th width="20%">分类名称</th>
                                <th width="30%">分类简介</th>
                                <th width="15%">创建时间</th>
                                <th width="15%">修改时间</th>
                                <th width="20%">操作</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($models as $model)
                            <tr class="text-c">
                                <td>{{ $model->name }}</td>
                                <td>{{ $model->brief }}</td>
                                <td>{{ (string)$model->created_at }}</td>
                                <td>{{ (string)$model->updated_at }}</td>
                                <td class="td-manage">
                                    <div class="btn-group">
                                        <a class="btn btn-default" href="{{ url('/admin/notice-dome/update',$model->id) }}">
                                            <i class="fa fa-fw fa-cog"></i>编辑
                                        </a>
                                    </div>
                                    <div class="btn-group">
                                        <a class="btn btn-default" href="{{ url('/admin/notice-dome/delete',$model->id) }}">
                                            <i class="fa fa-fw fa-trash"></i>删除
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="view-page col-md-12 col-md-offset-5">
                    {{ $models->render() }}
                </div>
            </div>
        </div>
    </div>
</section>
@endsection