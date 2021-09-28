@extends('admin.layouts.index')
@section('title-page')Создание рассылки@endsection
@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Создание рассылки</h3>
        </div>
        <div class="card-body table-responsive p-0">
            <form action="{{route('admin-email-sender-create')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="">Тема письма*</label>
                            <input class="form-control" type="text" placeholder="" name="subject" required>
                        </div>
                        <div class="form-group">
                            <label for="">Тело письма*</label>
                            <textarea id="editor" class="form-control" name="text" required></textarea>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn bg-gradient-info">Начать рассылку</button>
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
                lang: 'ru-RU'
            })
        })
    </script>
@endpush
