@extends('admin.layouts.index')
@section('title-page')Добавление условия@endsection
@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Добавление условия</h3>
        </div>
        <div class="card-body table-responsive p-0">
            <form action="{{route('admin-stipulations-save')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="">Название</label>
                            <input class="form-control" type="text" placeholder="" name="title" required>
                        </div>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="customFile" name="image_url" required>
                            <label class="custom-file-label" for="customFile">Изображение</label>
                        </div>
                        <div class="form-group">
                            <label>Текст</label>
                            <textarea class="form-control" rows="6" name="text" required></textarea>
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