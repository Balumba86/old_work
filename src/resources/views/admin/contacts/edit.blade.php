@extends('admin.layouts.index')
@section('title-page')Редактирование контакта@endsection
@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Редактирование контакта</h3>
        </div>
        <div class="card-body table-responsive p-0">
            <form action="{{route('admin-contacts-update', $contact->id )}}" method="post">
                @csrf
                @method('PUT')
                <div class="card">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="">Департамент*</label>
                            <input class="form-control" type="text" placeholder="" name="department_name" required value="{{$contact->department_name}}">
                        </div>
                        <div class="form-group">
                            <label for="">E-mail*</label>
                            <input class="form-control" type="email" placeholder="" name="email" required value="{{$contact->email}}">
                        </div>
                        <div class="form-group">
                            <label for="">Телефон*</label>
                            <input class="form-control" type="text" placeholder="+7 (4932) 55-55-55" name="phone" required data-inputmask='"mask": "+7 (999[9]) 99[9]-99-99"' data-mask value="{{$contact->phone}}">
                        </div>
                        <div class="form-group">
                            <label for="">Контактное лицо</label>
                            <input class="form-control" type="text" placeholder="" name="contact_name" value="{{$contact->contact_name}}">
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
@push('scripts')
    <script src="{{ asset('plugins/moment/moment.min.js') }}"></script>
    <script src="{{ asset('plugins/inputmask/jquery.inputmask.min.js') }}"></script>
    <script>
        $('[data-mask]').inputmask()
    </script>
@endpush
