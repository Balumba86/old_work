@extends('admin.layouts.index')
@section('title-page')Добавление категории@endsection
@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Добавление категории</h3>
        </div>
        <div class="card-body table-responsive p-0">
            <form action="{{route('admin-category-save')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="">Заголовок</label>
                            <input class="form-control" type="text" placeholder="" name="small_title" minlength="3" required>
                        </div>
                        <div class="form-group">
                            <label for="">Тип категории</label>
                            <select class="form-control" name="category_type">
                                <option value="category">Категория</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="">Сервисный тип</label>
                            <select class="form-control" name="service_type_id">
                                @foreach($service_type as $item)
                                    <option value="{{ $item->id }}">{{ $item->title }}</option>
                                @endforeach
                            </select>
                        </div>

                        <input type="hidden" name="enum_category_type" value="category">
                        <div class="form-group">
                            <label for="">Родительская категория</label>
                            <select name="parent_id" class="form-control">
                                <option value="0">Без родителя</option>
                                @include('admin.categories.select', ['categories' => $categories])
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Иконка категории</label>
                            <input type="file" name="image_url" accept=".jpg, .jpeg, .png" required>
                        </div>
                        <div class="form-group">
                            <label for="">Тэги</label>
                            <input class="form-control" type="text" placeholder="Перечисление тэгов через запятую" name="tags">
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
