@extends('admin.layouts.index')
@section('title-page')Редактирование истории@endsection
@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Редактирование истории</h3>
        </div>
        <div class="card-body table-responsive p-0">
            <form action="{{route('admin-stories-update')}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <input type="hidden" name="id" value="{{$story->id}}">
                <div class="card">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="">Заголовок</label>
                            <input class="form-control" type="text" placeholder="" name="preview_title" value="{{old('preview_title') ?? $story->preview_title}}" required>
                        </div>
                        <div class="form-group">
                            <label for="">Превью истории (128x128 | jpg, jpeg, png)</label>
                            <input class="form-control" type="file" placeholder="" name="preview_img">
                        </div>
                        <h4>Диплинк</h4>
                        <h6><i>Используется в приложении для перехода</i></h6>
                        <div class="form-group">
                            <label>Link</label>
                            <input type="text" class="form-control" name="link" value="{{$story->link}}" required>
                        </div>
                        <div class="form-group">
                            <label>Action name</label>
                            <input type="text" class="form-control" name="action_name" value="{{$story->action_name}}" required>
                        </div>
                        <div class="form-group">
                            <label>Button Type</label>
                            <input type="text" class="form-control" name="button_type" value="{{$story->button_type}}" required>
                        </div>
                        <div class="form-group">
                            <div class="custom-control custom-switch">
                                <input type="hidden" name="root" value="false">
                                <input type="checkbox" @if($story->root) checked @endif class="custom-control-input" id="customSwitch1" name="root" value="true">
                                <label class="custom-control-label" for="customSwitch1">Root</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="custom-control custom-switch">
                                <input type="hidden" name="is_active" value="false">
                                <input type="checkbox" @if($story->is_active) checked @endif class="custom-control-input" id="customSwitch2" name="is_active" value="true">
                                <label class="custom-control-label" for="customSwitch2">Активность</label>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn bg-gradient-info">Сохранить</button>
                        <a href="{{ url()->previous() }}" class="btn bg-gradient-warning">Назад</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
