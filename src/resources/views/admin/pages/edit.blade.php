@extends('admin.layouts.index')
@section('title-page')Редактирование статичной страницы@endsection
@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Редактирование статичной страницы</h3>
        </div>
        <div class="card-body table-responsive p-0">
            <form action="{{route('admin-pages-update', $page->id )}}" method="post">
                @csrf
                @method('PUT')
                <div class="card">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="">Название</label>
                            <input class="form-control" type="text" placeholder="" name="title" value="{{$page->title}}">
                        </div>
                        <div class="form-group">
                            <label for="">Slug ссылки*</label>
                            <input class="form-control" type="text" placeholder="" name="slug" required value="{{$page->slug}}">
                            <span class="text-muted">Только латиница, нижний регистр, без пробелов и спецсимволов</span>
                        </div>
                        <div class="form-group">
                            <label for="">Текст*</label>
                            @foreach($page->content as $item)
                                <textarea id="editor" class="form-control" name="content[description]" required>{{$item}}</textarea>
                            @endforeach
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
                height: 300,
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
                        xhr.open("POST", "/api/v1/system/upload?type=pages", true);
                        xhr.send(data);
                    }
                }
            })
        })
    </script>
@endpush
