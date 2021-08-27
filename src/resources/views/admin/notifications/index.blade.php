@extends('admin.layouts.index')
@section('title-page')Уведомления@endsection
@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Уведомления</h3>
        </div>
        <div class="card-body table-responsive p-0">
            <table class="table table-hover text-nowrap">
                <thead>
                <tr>
                    <th>id</th>
                    <th>Дата</th>
                    <th>Текст</th>
                    <th>Ссылка</th>
                    <th><a href="{{route('admin-notifications-add')}}" class="btn bg-gradient-success">+</a></th>
                </tr>
                </thead>
                <tbody>
                @forelse($notifications as $notification)
                <tr>
                    <td>{{$notification->id}}</td>
                    <td>{{$notification->date_time}}</td>
                    <td>{{$notification->text}}</td>
                    <td>{{$notification->link}}</td>
                    <td>
                        <button type="button" class="btn-danger" style="margin-left: 10px" data-toggle="modal" data-target="#modal-{{$notification->id}}">
                            <i class="fas fa-trash"></i>
                        </button>
                        <div class="modal fade" id="modal-{{$notification->id}}">
                            <div class="modal-dialog">
                                <div class="modal-content ">
                                    <form action="{{route('admin-notifications-delete', $notification->id)}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <div class="modal-header">
                                            <h4 class="modal-title">Внимание!</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span></button>
                                        </div>
                                        <div class="modal-body">
                                            <p>Вы действительно хотите удалить уведомление №{{$notification->id}}</p>
                                            <p class="small">Данное действие невозможно будет отменить</p>
                                        </div>
                                        <div class="modal-footer justify-content-between">
                                            <button type="button" class="btn btn-outline-dark" data-dismiss="modal">Отмена</button>
                                            <button type="submit" class="btn btn-outline-dark">Удалить</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                @empty
                    <tr><td colspan="10" style="text-align: center">Ничего нет</td></tr>
                @endforelse
                </tbody>
            </table>
        </div>
        <div class="card-footer">
            {{$notifications->links('admin.layouts.paginate')}}
        </div>
    </div>
@endsection
