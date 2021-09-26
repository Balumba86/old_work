@extends('admin.layouts.index')
@section('title-page')Добавление вакансии@endsection
@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Добавление вакансии</h3>
        </div>
        <div class="card-body table-responsive p-0">
            <form action="{{route('admin-jobs-create')}}" method="post">
                @csrf
                <div class="card">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="">Заголовок*</label>
                            <input class="form-control" type="text" placeholder="" name="title" required>
                        </div>
                        <div class="form-group">
                            <label for="">Текст*</label>
                            <textarea id="editor" class="form-control" name="description" required></textarea>
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
                height: 300,
                lang: 'ru-RU'
            })
        })
    </script>
@endpush
