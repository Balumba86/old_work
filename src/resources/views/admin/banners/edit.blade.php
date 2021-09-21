@extends('admin.layouts.index')
@section('title-page')Редактирование баннера@endsection
@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Редактирование баннера</h3>
        </div>
        <div class="card-body table-responsive p-0">
            <form action="{{route('admin-banners-update', $banner->id )}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="card">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="">Название</label>
                            <input class="form-control" type="text" placeholder="" name="name" value="{{$banner->name}}" >
                        </div>
                        <div class="form-group">
                            <label for="customFile">Файл баннера* (1600x900 px)</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="logo_shop" name="path">
                                <label class="custom-file-label" for="logo_shop">Выбрать файл</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="">Ссылка</label>
                            <input class="form-control" type="text" placeholder="" name="link" value="{{$banner->link}}">
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
