@extends('admin.layouts.index')
@section('title-page')Добавление сервиса/услуги@endsection
@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Добавление сервиса/услуги</h3>
        </div>
        <div class="card-body table-responsive p-0">
            <form action="{{route('admin-service-create')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card card-secondary">
                    <div class="card-header">
                        <h3 class="card-title">Основная информация</h3>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="">Название*</label>
                            <input class="form-control" type="text" placeholder="" name="title" required value="{{old("title")}}">
                            <input class="form-control" type="hidden" placeholder="" name="slug" readonly>
                        </div>
                        <div class="form-group">
                            <label for="">Категория*</label>
                            <select class="form-control" name="category" required>
                                @foreach($categories as $category)
                                    <option value="{{$category->id}}">{{$category->title}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="customFile">Логотип организации* (400x300 px)</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" required id="logo_shop" name="logo">
                                <label class="custom-file-label" for="logo_shop">Выбрать файл</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Галерея изображений</label>
                            <div class="form-group">
                                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#gallery">
                                    Открыть редактор
                                </button>
                                @include('admin.layouts.gallery_modal')
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="">Описание</label>
                            <textarea class="form-control" name="description">{{old("description")}}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="">Часы работы*</label>
                            <input class="form-control" type="text" placeholder="10:00 - 19:00" name="hours_work"
                                   data-inputmask='"mask": "99:99 - 99:99"' data-mask
                                   value="{{old("hours_work") ?? '09:00 - 21:00'}}"
                                   required>
                        </div>
                        <div class="form-group">
                            <label for="">Телефон</label>
                            <input class="form-control" type="text" placeholder="+7 (4932) 55-55-55" name="phone" value="{{old("phone")}}"
                                   data-inputmask='"mask": "+7 (999[9]) 99[9]-99-99"' data-mask
                            >
                        </div>
                        <div class="form-group">
                            <label for="">Вебсайт</label>
                            <input class="form-control" type="text" placeholder="https://sitecompany.ru" name="website" value="{{old("website")}}">
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="">Уровень расположения*</label>
                                    <select class="form-control" name="level">
                                        <option value="0">0</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="">Место*</label>
                                    <input class="form-control" type="text" placeholder="" name="point" required value="{{old("point")}}">
                                </div>
                            </div>
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
                                <input type="checkbox" class="custom-control-input" id="show_main" name="show_main" value="1" @if(old("show_main")) checked @endif>
                                <label class="custom-control-label" for="show_main">Выводить на главной странице</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="">Сортировка*</label>
                            <input class="form-control" type="text" placeholder="" name="sort" required value="100">
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
                            <input class="form-control" type="text" placeholder="" name="meta_title" required value="{{old("meta_title")}}">
                        </div>
                        <div class="form-group">
                            <label for="">Ключевые слова*</label>
                            <input class="form-control" type="text" placeholder="" name="meta_keywords" required value="{{old("meta_keywords")}}">
                        </div>
                        <div class="form-group">
                            <label for="">Мета-описание*</label>
                            <input class="form-control" type="text" placeholder="" name="meta_description" required value="{{old("meta_description")}}">
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

@endpush

@push('scripts')
    <script src="{{ asset('plugins/moment/moment.min.js') }}"></script>
    <script src="{{ asset('plugins/inputmask/jquery.inputmask.min.js') }}"></script>
    <script>
        $('[data-mask]').inputmask()
    </script>
@endpush
