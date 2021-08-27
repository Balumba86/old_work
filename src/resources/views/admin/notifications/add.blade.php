@extends('admin.layouts.index')
@section('title-page')Добавление уведомления@endsection
@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Добавление уведомления</h3>
        </div>
        <div class="card-body table-responsive p-0">
            <form action="{{route('admin-notifications-save')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="">Дата</label>
                            <input class="form-control" type="datetime-local" placeholder="" name="date_time" value="" required>
                        </div>
                        <div class="form-group">
                            <label for="">Текст</label>
                            <textarea class="form-control" rows="3" placeholder="" name="text" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="">Ссылка</label>
                            <input class="form-control" type="text" placeholder="" name="link" required>
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