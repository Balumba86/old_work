@extends('admin.layouts.index')
@section('title-page')Информация о заявке@endsection
@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Информация о заявке</h3>
        </div>
        <div class="card-body table-responsive p-0">
            <form action="{{route('admin-rent-update', $rent->id )}}" method="post">
                @csrf
                @method('PUT')
                <div class="card">
                    <div class="card-body">
                        @if($rent->is_new)
                        <div class="form-group">
                            <button type="submit" class="btn btn-info">Отметить, как прочитанную</button>
                        </div>
                        @endif
                        <dl>
                            <dt>Фамилия Имя Отчество</dt>
                            <dd>{{$rent->name}}</dd>
                            <dt>Контактный E-mail</dt>
                            <dd>{{$rent->email}}</dd>
                            <dt>Контактный телефон</dt>
                            <dd>{{$rent->phone}}</dd>
                            @if($rent->comment)
                                <dt>Комментарий</dt>
                                <dd>{{$rent->comment}}</dd>
                            @endif
                        </dl>
                    </div>
                    <div class="card-footer">
                        <a href="{{ url()->previous() }}" class="btn bg-gradient-warning">Назад</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
@push('scripts')
    <script>
        $(function () {

        })
    </script>
@endpush
