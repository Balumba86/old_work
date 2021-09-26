@extends('admin.layouts.index')
@section('title-page')Редактирование вакансии@endsection
@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Редактирование вакансии</h3>
        </div>
        <div class="card-body table-responsive p-0">
            <form action="{{route('admin-jobs-update', $job->id )}}" method="post">
                @csrf
                @method('PUT')
                <div class="card">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="">Заголовок*</label>
                            <input class="form-control" type="text" placeholder="" name="title" required value="{{$job->title}}">
                        </div>
                        <div class="form-group">
                            <label for="">Текст*</label>
                            <textarea id="editor" class="form-control" name="description" required>{{$job->description}}</textarea>
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
                lang: 'ru-RU'
            })
        })
    </script>
@endpush
