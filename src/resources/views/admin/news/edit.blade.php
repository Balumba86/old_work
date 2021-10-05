@extends('admin.layouts.index')
@section('title-page')Редактирование новости@endsection
@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Редактирование новости</h3>
        </div>
        <div class="card-body table-responsive p-0">
            <form action="{{route('admin-news-update', $post->id )}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="card">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="">Заголовок*</label>
                            <input class="form-control" type="text" placeholder="" name="title" required value="{{ $post->title }}">
                            <input class="form-control" type="hidden" placeholder="" name="slug" readonly value="{{ $post->slug }}">
                        </div>
                        <div class="form-group">
                            <label for="customFile">Главное изображение* <span class="small">(не выбирайте новый файл чтобы не удалять старый)</span></label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="logo_shop" name="main_img">
                                <label class="custom-file-label" for="logo_shop">Изменить файл</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="">Текст статьи*</label>
                            <textarea id="editor" class="form-control" name="text" required>{{ $post->text }}</textarea>
                        </div>

                        <div class="form-group">
                            <label for="">Мета-заголовок*</label>
                            <input class="form-control" type="text" placeholder="" name="meta_title" required value="{{ $post->meta_title }}">
                        </div>
                        <div class="form-group">
                            <label for="">Ключевые слова*</label>
                            <input class="form-control" type="text" placeholder="" name="meta_keywords" required value="{{ $post->meta_keywords }}">
                        </div>
                        <div class="form-group">
                            <label for="">Мета-описание*</label>
                            <input class="form-control" type="text" placeholder="" name="meta_description" required value="{{ $post->meta_description }}">
                        </div>

                        <div class="form-group">
                            <label for="">Опубликовать</label>
                            <select class="form-control" name="published">
                                <option value="1" @if($post->published) selected @endif>Да</option>
                                <option value="0" @if(!$post->published) selected @endif>Нет</option>
                            </select>
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
