@extends('admin.layouts.index')
@section('title-page')Редактирование товара@endsection
@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Редактирование товара</h3>
        </div>
        <div class="card-body table-responsive p-0">
            <form action="{{route('admin-products-update', $product->id)}}" method="post" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="card">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="">Заголовок</label>
                            <input class="form-control" type="text" name="title" value="{{$product->title}}" required>
                        </div>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="customFile" name="image_url">
                            <label class="custom-file-label" for="customFile">Изображение</label>
                        </div>
                        <div class="form-group">
                            <label>Описание</label>
                            <textarea class="form-control" rows="3" name="short_description" required>{{$product->short_description}}</textarea>
                        </div>
                        <div class="form-group">
                            <label>Детальное описание</label>
                            <textarea class="form-control" rows="6" name="description_text">{{$product->description_text}}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="">Срок оказания</label>
                            <input class="form-control" type="text" name="term" value="{{ $product->term }}">
                        </div>
                        <div class="form-group">
                            <label for="">Цена</label>
                            <input class="form-control" type="number" placeholder="" name="price" value="{{ $product->price }}">
                        </div>
                        <div class="form-group">
                            <label for="">Специальная цена</label>
                            <input class="form-control" type="number" placeholder="" name="special_price" value="{{ $product->special_price }}">
                        </div>
                        <div class="form-group">
                            <label for="">Отметка</label>
                            <input class="form-control" type="text" placeholder="" name="label" value="{{ $product->label }}">
                        </div>
                        <div class="form-group">
                            <label for="">Цвет отметки</label>
                            <input type="color" name="label_color" value="{{ $product->label_color ?? '#000000' }}">
                        </div>
                        <div class="form-group">
                            <label for="">Категория</label>
                            <select name="category_id" class="form-control" required>
                                @include('admin.products.categories', ['categories' => $categories])
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Логистический сервис</label>
                            <select name="fast_service_id" class="form-control">
                                <option value="">Без логистического сервиса</option>
                                @foreach($fastServices as $fastService)
                                    <option value="{{ $fastService->id }}" {{ ($fastService->id == $product->fast_service_id) ? "selected" : "" }}>{{ $fastService->title }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="">Тэги</label>
                            <input class="form-control" type="text" placeholder="Перечисление тэгов через запятую" name="tags" value="{{ $product->tags_list }}">
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
