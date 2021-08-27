@extends('admin.layouts.index')
@section('title-page')Добавление пункта приёма@endsection
@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Добавление пункта приёма</h3>
        </div>
        <div class="card-body table-responsive p-0">
            <form action="{{route('admin-points-save')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="">Название</label>
                            <input class="form-control" type="text" placeholder="" name="name" required>
                        </div>
                        <div class="form-group">
                            <label for="">Адрес</label>
                            <input class="form-control" type="text" placeholder="" name="address" required>
                        </div>
                        <div class="form-group">
                            <label for="">Телефон</label>
                            <input class="form-control" type="text" placeholder="" name="phone" required>
                        </div>
                        <div class="form-group">
                            <label for="">Широта</label>
                            <input class="form-control" type="text" placeholder="" name="latitude" required>
                        </div>
                        <div class="form-group">
                            <label for="">Долгота</label>
                            <input class="form-control" type="text" placeholder="" name="longitude" required>
                        </div>
                        <div class="form-group">
                            <label>Изображения пункта приёма</label>
                            <input type="file" name="images[]" multiple>
                        </div>
                        <div class="form-group">
                            <label>Станции метро (указать через запятую)</label>
                            <input class="form-control" type="text" placeholder="" name="subway_stations">
                        </div>
                        <h4>Часы работы</h4>
                        <div class="row workschedule-row">
                            <div class="col-lg">
                                <div class="form-group">
                                    <label>Дни</label>
                                    <input class="form-control days-field" type="text" placeholder="" name="workschedules[0][date]" required>
                                </div>
                            </div>
                            <div class="col-lg">
                                <div class="form-group">
                                    <label>Часы работы</label>
                                    <input class="form-control time-field" type="text" placeholder="" name="workschedules[0][time]" required>
                                </div>
                            </div>
                            <div class="col-lg">
                                <label>&nbsp;</label>
                                <div></div>
                            </div>
                        </div>
                        <div class="row">
                            <a href="#" class="btn bg-gradient-info add-more-fields-btn">+ Добавить ещё поля</a>
                        </div>
                        <div class="form-group">
                            <div class="custom-control custom-switch">
                                <input type="checkbox" class="custom-control-input" id="customSwitch1" name="is_express">
                                <label class="custom-control-label" for="customSwitch1">Экспресс</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="custom-control custom-switch">
                                <input type="hidden" name="is_active" value="false">
                                <input type="checkbox" checked class="custom-control-input" id="customSwitch2" name="is_active" value="true">
                                <label class="custom-control-label" for="customSwitch2">Активность</label>
                            </div>
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
@section('custom_scripts')
    <script>
        $(document).ready(function() {
            let schedule_fields_counter = 1;

            $('.add-more-fields-btn').click(function(e) {
                e.preventDefault();

                let html = $('.workschedule-row').first().clone();

                $(html).find('.days-field').attr('name', 'workschedules[' + schedule_fields_counter + '][date]').val('');
                $(html).find('.time-field').attr('name', 'workschedules[' + schedule_fields_counter + '][time]').val('');
                $(html).find('.col-lg').last().append('<a href="#" class="btn bg-gradient-danger remove-fields-btn">X</a>')
                $(html).insertAfter($(".workschedule-row").last());

                schedule_fields_counter++;

                return false;
            });

            $(document).on('click', '.remove-fields-btn', function(e) {
                e.preventDefault();

                $(this).parents('.workschedule-row').remove();

                return false;
            })
        });
    </script>
@endsection