@extends('admin.layouts.index')
@section('title-page')Добавление истории@endsection
@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Добавление истории</h3>
        </div>
        <div class="card-body table-responsive p-0">
            <form action="{{route('admin-stories-save')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="">Заголовок</label>
                            <input class="form-control" type="text" placeholder="" name="preview_title" value="{{old('preview_title')}}" required>
                        </div>
                        <div class="form-group">
                            <label for="">Превью истории (128x128 | jpg, jpeg, png)</label>
                            <input class="form-control" type="file" placeholder="" name="preview_img" required>
                        </div>
                        <h4>Диплинк</h4>
                        <h6><i>Используется в приложении для перехода</i></h6>
                        <div class="form-group">
                            <label>Ссылка на внешний ресурс</label>
                            <input type="text" class="form-control" name="link" value="dialog://stories" required>
                        </div>
                        <div class="form-group">
                            <div class="custom-control custom-switch">
                                <input type="hidden" name="is_active" value="false">
                                <input type="checkbox" checked class="custom-control-input" id="customSwitch2" name="is_active" value="true">
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
