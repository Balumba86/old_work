@extends('admin.layouts.index')
@section('title-page')Добавление баннера@endsection
@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Добавление баннера</h3>
        </div>
        <div class="card-body table-responsive p-0">
            <form action="{{route('admin-banners-create')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="">Название</label>
                            <input class="form-control" type="text" placeholder="" name="name" >
                        </div>
                        <div class="form-group">
                            <label for="customFile">Файл баннера* (1600x900 px)</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" required id="logo_shop" name="path">
                                <label class="custom-file-label" for="logo_shop">Выбрать файл</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="">Ссылка</label>
                            <input class="form-control" type="text" placeholder="" name="link">
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn bg-gradient-info">Сохранить</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
