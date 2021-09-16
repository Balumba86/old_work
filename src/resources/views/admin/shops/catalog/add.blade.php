@extends('admin.layouts.index')
@section('title-page')Добавление магазина@endsection
@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Добавление магазина</h3>
        </div>
        <div class="card-body table-responsive p-0">
            <form action="{{route('admin-shop-create')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card card-secondary">
                    <div class="card-header">
                        <h3 class="card-title">Основная информация</h3>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="">Название*</label>
                            <input class="form-control" type="text" placeholder="" name="title" required>
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
                            <label for="customFile">Логотип магазина*</label>
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
                                <div class="modal fade" id="gallery">
                                    <div class="modal-dialog modal-xl">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title">Галерея</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">

                                                <div class="card card-success card-outline card-tabs">
                                                    <div class="card-header p-0 pt-1">
                                                        <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
                                                            <li class="nav-item">
                                                                <a class="nav-link active" id="custom-tabs-one-home-tab" data-toggle="pill" href="#tab-list" role="tab" aria-controls="custom-tabs-one-home" aria-selected="true">Загруженное</a>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a class="nav-link" id="custom-tabs-one-profile-tab" data-toggle="pill" href="#tab-load" role="tab" aria-controls="custom-tabs-one-profile" aria-selected="false">Добавить ещё</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="tab-content" id="custom-tabs-one-tabContent">
                                                            <div class="tab-pane fade show active" id="tab-list" role="tabpanel" aria-labelledby="custom-tabs-one-home-tab">
                                                                <div id="loaded_files_block" class="row">

                                                                </div>
                                                            </div>
                                                            <div class="tab-pane fade" id="tab-load" role="tabpanel" aria-labelledby="custom-tabs-one-profile-tab">
                                                                <div id="add_files_block">
                                                                    <div class="custom-file" id="gallery_add">
                                                                        <input type="file" accept="image/jpeg,image/png,image/jpg" class="custom-file-input" id="gallery" multiple name="images[]">
                                                                        <label class="custom-file-label" for="gallery">Выбрать файлы</label>
                                                                    </div>
                                                                    <div class="form-group mt-3" id="template_result" style="display: none">
                                                                        <span>Прогресс загрузки</span>
                                                                        <div class="progress progress-sm">
                                                                            <div id="progress-file" class="progress-bar bg-success progress-file" role="progressbar" style="width: 0%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <button type="button" class="btn btn-primary" id="send-files" style="display: none">Загрузить</button>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer justify-content-between">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-success" data-dismiss="modal">Применить</button>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                        <div class="form-group">
                            <label for="">Описание</label>
                            <textarea class="form-control" name="description"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="">Часы работы*</label>
                            <input class="form-control" type="text" placeholder="10:00 - 19:00" name="hours_work"
                                   data-inputmask='"mask": "99:99 - 99:99"' data-mask
                                   value="09:00 - 21:00"
                                   required>
                        </div>
                        <div class="form-group">
                            <label for="">Телнфон</label>
                            <input class="form-control" type="text" placeholder="+7 (4932) 55-55-55" name="phone"
                                   data-inputmask='"mask": "+7 (999[9]) 99[9]-99-99"' data-mask
                            >
                        </div>
                        <div class="form-group">
                            <label for="">Вебсайт</label>
                            <input class="form-control" type="text" placeholder="https://sitecompany.ru" name="website">
                        </div>
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
                </div>
                <div class="card card-secondary">
                    <div class="card-header">
                        <h3 class="card-title">Настройки</h3>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                                <input type="hidden" name="show_main" value="0">
                                <input type="checkbox" class="custom-control-input" id="show_main" name="show_main" value="1">
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
@push('styles')

@endpush

@push('scripts')
    <script src="{{ asset('plugins/moment/moment.min.js') }}"></script>
    <script src="{{ asset('plugins/inputmask/jquery.inputmask.min.js') }}"></script>
    <script>
        $('[data-mask]').inputmask()
    </script>
@endpush
