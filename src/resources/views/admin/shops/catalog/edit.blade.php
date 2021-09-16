@extends('admin.layouts.index')
@section('title-page')Редактирование магазина@endsection
@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Редактирование магазина</h3>
        </div>
        <div class="card-body table-responsive p-0">
            <form action="{{route('admin-shop-update', $shop->id )}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="card card-secondary">
                    <div class="card-header">
                        <h3 class="card-title">Основная информация</h3>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="">Название*</label>
                            <input class="form-control" type="text" placeholder="" name="title" required value="{{$shop->title}}">
                            <input class="form-control" type="hidden" placeholder="" name="slug" readonly value="{{$shop->slug}}">
                        </div>
                        <div class="form-group">
                            <label for="">Категория*</label>
                            <select class="form-control" name="category" required>
                                @foreach($categories as $category)
                                    <option value="{{$category->id}}" @if($category->id === $shop->category) selected @endif>{{$category->title}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="customFile">Логотип магазина* <span class="small">(не выбирайте новый файл чтобы не удалять старый)</span></label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="logo_shop" name="logo">
                                <label class="custom-file-label" for="logo_shop">Изменить файл</label>
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
                            <textarea class="form-control" name="description">{{$shop->description}}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="">Часы работы*</label>
                            <input class="form-control" type="text" placeholder="10:00 - 19:00" name="hours_work"
                                   data-inputmask='"mask": "99:99 - 99:99"' data-mask
                                   required
                                   value="{{$shop->hours_work}}">
                        </div>
                        <div class="form-group">
                            <label for="">Телнфон</label>
                            <input class="form-control" type="text" placeholder="+7 (4932) 55-55-55" name="phone" value="{{$shop->phone}}"
                                   data-inputmask='"mask": "+7 (999[9]) 99[9]-99-99"' data-mask
                            >
                        </div>
                        <div class="form-group">
                            <label for="">Вебсайт</label>
                            <input class="form-control" type="text" placeholder="https://sitecompany.ru" name="website" value="{{$shop->website}}">
                        </div>
                        <div class="form-group">
                            <label for="">Уровень расположения*</label>
                            <select class="form-control" name="level">
                                <option value="0" @if($shop->level === 0) selected @endif>0</option>
                                <option value="1" @if($shop->level === 1) selected @endif>1</option>
                                <option value="2" @if($shop->level === 2) selected @endif>2</option>
                                <option value="3" @if($shop->level === 3) selected @endif>3</option>
                                <option value="4" @if($shop->level === 4) selected @endif>4</option>
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
                                <input type="checkbox" class="custom-control-input" id="show_main" name="show_main" value="1" @if($shop->show_main) checked @endif>
                                <label class="custom-control-label" for="show_main">Выводить на главной странице</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="">Сортировка*</label>
                            <input class="form-control" type="text" placeholder="" name="sort" required value="{{$shop->sort}}">
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
                            <input class="form-control" type="text" placeholder="" name="meta_title" required value="{{$shop->meta_title}}">
                        </div>
                        <div class="form-group">
                            <label for="">Ключевые слова*</label>
                            <input class="form-control" type="text" placeholder="" name="meta_keywords" required value="{{$shop->meta_keywords}}">
                        </div>
                        <div class="form-group">
                            <label for="">Мета-описание*</label>
                            <input class="form-control" type="text" placeholder="" name="meta_description" required value="{{$shop->meta_description}}">
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
@push('styles')
@endpush

@push('scripts')
    <script src="{{ asset('plugins/moment/moment.min.js') }}"></script>
    <script src="{{ asset('plugins/inputmask/jquery.inputmask.min.js') }}"></script>
    <script>
        window.onload = function(){
            $('[data-mask]').inputmask();

            // $('#gallery').on('change', function (e) {
            //     $('#send-files').show();
            //     $('#progress-file').attr('aria-valuemax', 100)
            //     $('#progress-file').attr('aria-valuenow', 0)
            //     $('#progress-file').attr('style', `width: 0%`);
            //     $('#template_result').show();
            //     $('#send-files').attr('disabled', false);
            // })

            // $('#send-files').on('click', function (e) {
            //     e.stopPropagation();
            //     e.preventDefault();
            //     $(e.target).attr('disabled', true);
            //     let input = $(e.target).closest('.modal-content').find('input[type="file"]');
            //     let files = input[0].files;
            //     uploadAudio(files, function (data) {
            //         if (data.type === 'success') {
            //             console.log('key', data)
            //         }
            //     });
            // });

            {{--function uploadAudio(files, callback) {--}}
            {{--    var xhr = new XMLHttpRequest();--}}
            {{--    // обработчик для отправки--}}
            {{--    xhr.upload.onprogress = function(event) {--}}
            {{--        let procent = (event.loaded / event.total) * 100;--}}
            {{--        $('#progress-file').attr('aria-valuemax', event.total)--}}
            {{--        $('#progress-file').attr('aria-valuenow', event.loaded)--}}
            {{--        $('#progress-file').attr('style', `width: ${procent}%`);--}}
            {{--    }--}}
            {{--    $.each(files, function( key, value ){--}}
            {{--        let data = new FormData();--}}
            {{--        data.append('content', value);--}}
            {{--        data.append('id', {{ $shop->test ?: null }});--}}
            {{--        xhr.onload = xhr.onerror = function() {--}}
            {{--            if (this.status === 200) {--}}
            {{--                console.log("success", this.response);--}}
            {{--                callback(JSON.parse(this.response));--}}
            {{--            } else {--}}
            {{--                console.log("error " + this.status);--}}
            {{--                callback({success: false, status: this.status});--}}
            {{--            }--}}
            {{--        };--}}
            {{--        xhr.open("POST", "/api/v1/system/upload/shop", false);--}}
            {{--        xhr.send(data);--}}
            {{--    })--}}

            {{--}--}}
        }
    </script>
@endpush
