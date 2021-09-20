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
                            <label for="customFile">Логотип магазина* (400x300 px) <span class="small">(не выбирайте новый файл чтобы не удалять старый)</span></label>
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
                                @include('admin.layouts.gallery_modal')
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
                            <label for="">Телефон</label>
                            <input class="form-control" type="text" placeholder="+7 (4932) 55-55-55" name="phone" value="{{$shop->phone}}"
                                   data-inputmask='"mask": "+7 (999[9]) 99[9]-99-99"' data-mask
                            >
                        </div>
                        <div class="form-group">
                            <label for="">Вебсайт</label>
                            <input class="form-control" type="text" placeholder="https://sitecompany.ru" name="website" value="{{$shop->website}}">
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
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
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="">Место*</label>
                                    <input class="form-control" type="text" placeholder="" name="point" required value="{{$shop->point}}">
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
