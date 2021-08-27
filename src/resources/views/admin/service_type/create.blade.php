@extends('admin.layouts.index')
@section('title-page') Добавление сервисного типа @endsection
@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Добавление сервисного типа</h3>
        </div>
        <div class="card-body table-responsive p-0">
            <form action="{{route('service-type.store')}}" method="POST">
                @csrf
                <div class="card">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="title">Заголовок</label>
                            <input id="title" class="form-control @error('title') is-invalid @enderror"
                                   type="text"
                                   placeholder=""
                                   name="title"
                                   required
                                    value="{{ old('title') }}">
                        </div>
                        <div class="form-group">
                            <label for="alias">Алиас</label>
                            <input id="alias" class="form-control @error('alias') is-invalid @enderror"
                                   type="text"
                                   placeholder=""
                                   name="alias"
                                   required
                                    value="{{ old('alias') }}">
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
