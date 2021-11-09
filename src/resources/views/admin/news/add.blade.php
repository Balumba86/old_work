@extends('admin.layouts.index')
@section('title-page')Добавление новости@endsection
@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Добавление новости</h3>
        </div>
        <div class="card-body table-responsive p-0">
            <form action="{{route('admin-news-create')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="">Заголовок*</label>
                            <input class="form-control" type="text" placeholder="" name="title" required value="{{old("title")}}">
                            <input class="form-control" type="hidden" placeholder="" name="slug" readonly>
                        </div>
                        <div class="form-group">
                            <label for="">Тип публикации</label>
                            <select class="form-control" name="type">
                                @foreach($event_types as $key => $value)
                                    <option value="{{$key}}">{{$value}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="customFile">Главное изображение* (400x300 px)</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" required id="logo_shop" name="main_img">
                                <label class="custom-file-label" for="logo_shop">Выбрать файл</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="">Текст статьи*</label>
                            <textarea id="editor" class="form-control" name="text" required>{{old("text")}}</textarea>
                        </div>

                        <div class="form-group">
                            <label for="">Мета-заголовок*</label>
                            <input class="form-control" type="text" placeholder="" name="meta_title" required value="{{old("meta_title")}}">
                        </div>
                        <div class="form-group">
                            <label for="">Ключевые слова*</label>
                            <input class="form-control" type="text" placeholder="" name="meta_keywords" required value="{{old("meta_keywords")}}">
                        </div>
                        <div class="form-group">
                            <label for="">Мета-описание*</label>
                            <input class="form-control" type="text" placeholder="" name="meta_description" required value="{{old("meta_description")}}">
                        </div>

                        <div class="form-group">
                            <label for="">Опубликовать</label>
                            <select class="form-control" name="published">
                                <option value="1">Да</option>
                                <option value="0">Нет</option>
                            </select>
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
@push('styles')
    <link rel="stylesheet" href="{{ asset('plugins/summernote/summernote-bs4.min.css') }}">
@endpush

@push('scripts')
    <script src="{{ asset('plugins/summernote/summernote-bs4.js') }}"></script>
    <script src="{{ asset('plugins/summernote/lang/summernote-ru-RU.min.js') }}"></script>
    <script>
        $(function () {
            $('#editor').summernote({
                height: 500,
                lang: 'ru-RU',
                multiple: false,
                callbacks: {
                    onImageUpload: function(files) {
                        let xhr = new XMLHttpRequest();
                        let data = new FormData();
                        data.append('image', files[0]);
                        xhr.onload = xhr.onerror = function() {
                            if (this.status === 200) {
                                let result = JSON.parse(this.response)
                                $('#editor').summernote('insertImage', result.data);
                            } else {
                                console.log("error " + this.status);
                            }
                        };
                        xhr.open("POST", "/api/v1/system/upload?type=news_image", true);
                        xhr.send(data);
                    }
                }
            })
        })
    </script>
@endpush
