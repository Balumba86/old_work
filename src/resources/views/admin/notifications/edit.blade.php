@extends('admin.layouts.index')
@section('title-page')Изменение уведомления@endsection
@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Изменение уведомления</h3>
        </div>
        <div class="card-body table-responsive p-0">
            <form action="{{route('admin-notifications-update')}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <input type="hidden" name="id" value="{{$notification->id}}">
                <div class="card">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="">Дата</label>
                            <input class="form-control" type="datetime-local" placeholder="" name="date_time" value="{{ $notification->date_time }}" required>
                        </div>
                        <div class="form-group">
                            <label for="">Текст</label>
                            <textarea class="form-control" rows="3" placeholder="" name="text" required>{{ $notification->text }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="">Ссылка</label>
                            <input class="form-control" type="text" placeholder="" name="link" required value="{{ $notification->link }}">
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
