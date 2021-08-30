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
                            <input class="form-control" type="text" placeholder="" name="title" required>
                            <input class="form-control" type="hidden" placeholder="" name="slug" readonly>
                        </div>
                        <div class="form-group">
                            <label for="">Текст статьи*</label>
                            <textarea id="editor" class="form-control" name="text" required></textarea>
                        </div>

                        <div class="form-group">
                            <label for="">Мета-заголовок*</label>
                            <input class="form-control" type="text" placeholder="" name="meta_title" required>
                        </div>
                        <div class="form-group">
                            <label for="">Ключевые слова*</label>
                            <input class="form-control" type="text" placeholder="" name="meta_keywords" required>
                        </div>
                        <div class="form-group">
                            <label for="">Мета-описание*</label>
                            <input class="form-control" type="text" placeholder="" name="meta_description" required>
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
    <script src="{{ asset('plugins/summernote/summernote-bs4.min.js') }}"></script>
    <script src="{{ asset('plugins/summernote/lang/summernote-ru-RU.min.js') }}"></script>
    <script>
        $(function () {
            $('#editor').summernote({
                height: 200,
                lang: 'ru-RU'
            })
        })
    </script>
@endpush
