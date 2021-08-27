@extends('admin.layouts.index')
@section('title-page')Добавление логистического сервиса@endsection
@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Добавление логистического сервиса</h3>
        </div>
        <div class="card-body table-responsive p-0">
            <form action="{{route('admin-fast-services-save')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="">Название</label>
                            <input class="form-control" type="text" placeholder="" name="title" required>
                        </div>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="customFile" name="image_url" required>
                            <label class="custom-file-label" for="customFile">Изображение</label>
                        </div>
                        <div class="form-group">
                            <label>Краткое описание</label>
                            <textarea class="form-control" rows="3" name="preview_text"></textarea>
                        </div>
                        <div class="form-group">
                            <label>Подробное описание</label>
                            <textarea class="form-control" rows="6" name="text"></textarea>
                        </div>
                        <div class="form-group">
                            <label>Инфо</label>
                            <textarea class="form-control" rows="3" name="info"></textarea>
                        </div>
                        <div class="form-group">
                            <label>Заголовок прайса</label>
                            <input class="form-control" type="text" placeholder="" name="price_title">
                        </div>
                        <h4>Цены прайса</h4>
                        <div class="row prices-row">
                            <div class="col-lg">
                                <div class="form-group">
                                    <label>Текст</label>
                                    <input class="form-control text-field" type="text" placeholder="" name="prices[0][text]">
                                </div>
                            </div>
                            <div class="col-lg">
                                <div class="form-group">
                                    <label>Цена</label>
                                    <input class="form-control price-field" type="text" placeholder="" name="prices[0][price]">
                                </div>
                            </div>
                            <div class="col-lg">
                                <label>&nbsp;</label>
                                <div></div>
                            </div>
                        </div>
                        <div class="row">
                            <a href="#" class="btn bg-gradient-info add-more-prices-btn">+ Добавить ещё поля</a>
                        </div>

                        <h4>Условия</h4>
                        <div class="row stipulations-row">
                            <div class="col-lg">
                                <div class="form-group">
                                    <label>Условие</label>
                                    <select class="form-control stipulation-field" type="text" name="stipulations[0]">
                                        <option value="">Без условия</option>
                                        @foreach($stipulations as $stipulation)
                                            <option value="{{ $stipulation->id }}">{{ $stipulation->title }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg">
                                <label>&nbsp;</label>
                                <div></div>
                            </div>
                        </div>
                        <div class="row">
                            <a href="#" class="btn bg-gradient-info add-more-stipulations-btn">+ Добавить ещё поля</a>
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
            let prices_fields_counter = 1,
                stipulations_fields_counter = 1;

            $('.add-more-prices-btn').click(function(e) {
                e.preventDefault();

                let html = $('.prices-row').first().clone();

                $(html).find('.text-field').attr('name', 'prices[' + prices_fields_counter + '][text]').val('');
                $(html).find('.price-field').attr('name', 'prices[' + prices_fields_counter + '][price]').val('');
                $(html).find('.col-lg').last().append('<a href="#" class="btn bg-gradient-danger remove-prices-btn">X</a>')
                $(html).insertAfter($(".prices-row").last());

                prices_fields_counter++;

                return false;
            });

            $(document).on('click', '.remove-prices-btn', function(e) {
                e.preventDefault();

                $(this).parents('.prices-row').remove();

                return false;
            })

            $('.add-more-stipulations-btn').click(function(e) {
                e.preventDefault();

                let html = $('.stipulations-row').first().clone();

                $(html).find('.stipulation-field').attr('name', 'stipulations[' + stipulations_fields_counter + ']');
                $(html).find('.col-lg').last().append('<a href="#" class="btn bg-gradient-danger remove-stipulations-btn">X</a>')
                $(html).insertAfter($(".stipulations-row").last());

                stipulations_fields_counter++;

                return false;
            });

            $(document).on('click', '.remove-stipulations-btn', function(e) {
                e.preventDefault();

                $(this).parents('.stipulations-row').remove();

                return false;
            })
        });
    </script>
@endsection