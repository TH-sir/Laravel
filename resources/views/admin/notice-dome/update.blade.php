@extends('admin.layouts.main')
@section('title','公告分类添加')
@section('content')
<div class="row">
    <div class="col-xs-12">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">公告分类添加</h3>
            </div>
            <div class="box-body">
                <form action="" method="POST" class="form">
                    @csrf
                    <div class="form-group col-sm-12 top-input">
                        <label for="name" class="col-sm-2 control-label">公告分类名称：</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" value="{{ old('name',$model->name)}}" name="name">
                            @if ($errors->has('name'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group col-sm-12 top-input">
                        <label for="brief" class="col-sm-2 control-label">公告分类简介：</label>
                        <div class="col-sm-9">
                            <textarea class="form-control" rows="3" name="brief">{{old('brief',$model->brief )}}</textarea>
                            @if ($errors->has('brief'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('brief') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                    <div class="box-footer">
                        <input type="submit" value="提交" class="btn btn-info pull-right">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection