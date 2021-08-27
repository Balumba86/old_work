@extends('admin.layouts.index')
@section('title-page')Добавление товара@endsection
@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Добавление товара</h3>
        </div>
        <div class="card-body table-responsive p-0">
            <form action="{{route('admin-products-save')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="">Заголовок</label>
                            <input class="form-control" type="text" name="title" required>
                        </div>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="customFile" name="image_url" required>
                            <label class="custom-file-label" for="customFile">Изображение</label>
                        </div>
                        <div class="form-group">
                            <label>Описание</label>
                            <textarea class="form-control" rows="3" name="short_description" required></textarea>
                        </div>
                        <div class="form-group">
                            <label>Детальное описание</label>
                            <textarea class="form-control" rows="6" name="description_text"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="">Срок оказания</label>
                            <input class="form-control" type="text" name="term">
                        </div>
                        <div class="form-group">
                            <label for="">Цена</label>
                            <input class="form-control" type="number" placeholder="" name="price">
                        </div>
                        <div class="form-group">
                            <label for="">Специальная цена</label>
                            <input class="form-control" type="number" placeholder="" name="special_price">
                        </div>
                        <div class="form-group">
                            <label for="">Отметка</label>
                            <input class="form-control" type="text" placeholder="" name="label">
                        </div>
                        <div class="form-group">
                            <label for="">Цвет отметки</label>
                            <input type="color" value="#000000" name="label_color">
                        </div>
                        <div class="form-group">
                            <label for="">Категория</label>
                            <select name="category_id" class="form-control" required>
                                @include('admin.categories.select', ['categories' => $categories])
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Логистический сервис</label>
                            <select name="fast_service_id" class="form-control">
                                <option value="">Без логистического сервиса</option>
                                @foreach($fastServices as $fastService)
                                    <option value="{{ $fastService->id }}">{{ $fastService->title }}</option>
                                @endforeach
                            </select>
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
