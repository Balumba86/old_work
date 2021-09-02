@extends('admin.layouts.index')
@section('title-page')Редактирование категории сервиса/услуги@endsection
@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Редактирование категории сервиса/услуги</h3>
        </div>
        <div class="card-body table-responsive p-0">
            <form action="{{route('admin-service-category-update', $category->id )}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="card">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="">Название*</label>
                            <input class="form-control" type="text" placeholder="" name="title" required value="{{ $category->title }}">
                            <input class="form-control" type="hidden" placeholder="" name="slug" readonly value="{{ $category->slug }}">
                        </div>
                        <div class="form-group">
                            <label for="">Описание</label>
                            <textarea class="form-control" name="description">{{ $category->description }}</textarea>
                        </div>

                        <div class="form-group">
                            <label for="">Мета-заголовок*</label>
                            <input class="form-control" type="text" placeholder="" name="meta_title" required value="{{ $category->meta_title }}">
                        </div>
                        <div class="form-group">
                            <label for="">Ключевые слова*</label>
                            <input class="form-control" type="text" placeholder="" name="meta_keywords" required value="{{ $category->meta_keywords }}">
                        </div>
                        <div class="form-group">
                            <label for="">Мета-описание*</label>
                            <input class="form-control" type="text" placeholder="" name="meta_description" required value="{{ $category->meta_description }}">
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
