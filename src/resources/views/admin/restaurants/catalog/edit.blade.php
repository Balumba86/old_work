@extends('admin.layouts.index')
@section('title-page')Редактирование кафе/ресторана@endsection
@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Редактирование кафе/ресторана</h3>
        </div>
        <div class="card-body table-responsive p-0">
            <form action="{{route('admin-restaurant-update', $restaurant->id )}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="card card-secondary">
                    <div class="card-header">
                        <h3 class="card-title">Основная информация</h3>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="">Название*</label>
                            <input class="form-control" type="text" placeholder="" name="title" required value="{{$restaurant->title}}">
                            <input class="form-control" type="hidden" placeholder="" name="slug" readonly value="{{$restaurant->slug}}">
                        </div>
                        <div class="form-group">
                            <label for="">Категория*</label>
                            <select class="form-control" name="category" required>
                                @foreach($categories as $category)
                                    <option value="{{$category->id}}" @if($category->id === $restaurant->category) selected @endif>{{$category->title}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="customFile">Логотип сагазина* <span class="small">(не выбирайте новый файл чтобы не удалять старый)</span></label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="logo_shop" name="logo">
                                <label class="custom-file-label" for="logo_shop">Изменить файл</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="">Описание</label>
                            <textarea class="form-control" name="description">{{$restaurant->description}}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="">Часы работы*</label>
                            <input class="form-control" type="text" placeholder="10:00 - 19:00" name="hours_work" required value="{{$restaurant->hours_work}}">
                        </div>
                        <div class="form-group">
                            <label for="">Телнфон</label>
                            <input class="form-control" type="text" placeholder="+7(4932)55-55-55" name="phone" value="{{$restaurant->phone}}">
                        </div>
                        <div class="form-group">
                            <label for="">Вебсайт</label>
                            <input class="form-control" type="text" placeholder="https://sitecompany.ru" name="website" value="{{$restaurant->website}}">
                        </div>
                    </div>
                </div>
                <div class="card card-secondary">
                    <div class="card-header">
                        <h3 class="card-title">Настройки</h3>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                                <input type="hidden" name="show_main" value="0">
                                <input type="checkbox" class="custom-control-input" id="show_main" name="show_main" value="1" @if($restaurant->show_main) checked @endif>
                                <label class="custom-control-label" for="show_main">Выводить на главной странице</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="">Сортировка*</label>
                            <input class="form-control" type="text" placeholder="" name="sort" required value="{{$restaurant->sort}}">
                        </div>
                    </div>
                </div>
                <div class="card card-secondary">
                    <div class="card-header">
                        <h3 class="card-title">SEO</h3>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="">Мета-заголовок*</label>
                            <input class="form-control" type="text" placeholder="" name="meta_title" required value="{{$restaurant->meta_title}}">
                        </div>
                        <div class="form-group">
                            <label for="">Ключевые слова*</label>
                            <input class="form-control" type="text" placeholder="" name="meta_keywords" required value="{{$restaurant->meta_keywords}}">
                        </div>
                        <div class="form-group">
                            <label for="">Мета-описание*</label>
                            <input class="form-control" type="text" placeholder="" name="meta_description" required value="{{$restaurant->meta_description}}">
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
