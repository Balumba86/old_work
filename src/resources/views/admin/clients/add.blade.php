@extends('admin.layouts.index')
@section('title-page')Добавление пользователя@endsection
@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Добавление пользователя</h3>
        </div>
        <div class="card-body table-responsive p-0">
            <form action="{{route('admin-clients-create')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="">Заголовок</label>
                            <input class="form-control" type="text" placeholder="" name="small_title" required>
                        </div>
                        <div class="form-group">
                            <label for="">Тип категории</label>
                            <select class="form-control" name="enum_category_type">
                                <option value="service_type">Сервис</option>
                                <option value="category">Категория</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Родительская категория</label>
                            <select name="parent_id" class="form-control">
                                <option value="0">Без родителя</option>
                                @foreach($categories as $category)
                                    <option value="{{$category->id}}">{{$category->small_title}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="customFile" name="image_url" required>
                            <label class="custom-file-label" for="customFile">Иконка категории</label>
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
