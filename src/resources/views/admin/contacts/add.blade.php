@extends('admin.layouts.index')
@section('title-page')Добавление контакта@endsection
@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Добавление контакта</h3>
        </div>
        <div class="card-body table-responsive p-0">
            <form action="{{route('admin-contacts-create')}}" method="post">
                @csrf
                <div class="card">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="">Департамент*</label>
                            <input class="form-control" type="text" placeholder="" name="department_name" required>
                        </div>
                        <div class="form-group">
                            <label for="">E-mail*</label>
                            <input class="form-control" type="email" placeholder="" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="">Телефон*</label>
                            <input class="form-control" type="text" placeholder="+7 (4932) 55-55-55" name="phone" required data-inputmask='"mask": "+7 (999[9]) 99[9]-99-99"' data-mask>
                        </div>
                        <div class="form-group">
                            <label for="">Контактное лицо</label>
                            <input class="form-control" type="text" placeholder="" name="contact_name">
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
@push('scripts')
    <script src="{{ asset('plugins/moment/moment.min.js') }}"></script>
    <script src="{{ asset('plugins/inputmask/jquery.inputmask.min.js') }}"></script>
    <script>
        $('[data-mask]').inputmask()
    </script>
@endpush
