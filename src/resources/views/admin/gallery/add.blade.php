@extends('admin.layouts.index')
@section('title-page')Добавление элемента@endsection
@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Добавление элемента</h3>
        </div>
        <div class="card-body table-responsive p-0">
            <form action="{{route('admin-gallery-create')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card">
                    <div class="card-body">
                        <div class="alert alert-info alert-dismissible">
                            <h5><i class="icon fas fa-info"></i> Важно</h5>
                            При добавлении элемента, нужно заполнить только одно поле источника. <br>
                            Если выбрана картинка, то ссылку на видео указывать не нужно и наоборот. <br>
                            Размеры изображения свободные, но НЕ НУЖНО загружать слишким большие файлы. Как по весу, так и по разрешению.
                        </div>
                        <div class="form-group">
                            <label for="">Альтернативный текст для картинки*</label>
                            <input class="form-control" type="text" placeholder="" name="alt" required value="{{ old('alt' ?? '') }}">
                        </div>
                        <div class="form-group">
                            <label for="customFile">Изображение</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="gallery_img" name="image" accept="image/*">
                                <label class="custom-file-label" for="gallery_img">Выбрать файл</label>
                            </div>
                        </div>
                        <div class="alert alert-danger alert-dismissible">
                            Обратите внимание, что ссылка на видео должна быть короткой для вставки на сайт. <br>
                            Видео-нструкция по получению ссылки находится <a href="#" target="_blank"> тут</a>
                        </div>
                        <div class="form-group">
                            <label for="">Ссылка на видео с YouTube</label>
                            <input class="form-control" type="text" placeholder="https://www.youtube.com/embed/GMppyAPbLYk" name="link" value="{{ old('link' ?? '') }}">
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
