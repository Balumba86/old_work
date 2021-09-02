@extends('admin.layouts.index')
@section('title-page')Добавление категории сервиса/услуги@endsection
@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Добавление категории сервиса/услуги</h3>
        </div>
        <div class="card-body table-responsive p-0">
            <form action="{{route('admin-service-category-create')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="">Название*</label>
                            <input class="form-control" type="text" placeholder="" name="title" required>
                            <input class="form-control" type="hidden" placeholder="" name="slug" readonly>
                        </div>
                        <div class="form-group">
                            <label for="">Описание</label>
                            <textarea class="form-control" name="description"></textarea>
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
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn bg-gradient-info">Сохранить</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
