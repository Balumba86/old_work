@extends('admin.layouts.index')
@section('title-page')Заявки на аренду@endsection
@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Заявки на аренду</h3>
        </div>
        <div class="card-header">
            <form action="{{route('admin-rent')}}" method="GET">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="form-group">
                            <input class="form-control" type="text" placeholder="ФИО" name="name" value="{{ request()->name }}">
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group">
                            <input class="form-control" type="text" placeholder="E-mail" name="email" value="{{ request()->email }}">
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group">
                            <input class="form-control" type="text" placeholder="Телефон" name="phone" value="{{ request()->phone }}">
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <button type="submit" class="btn btn-outline-info"><i class="fas fa-search"></i></button>
                        @if(request()->name || request()->email || request()->phone)
                        <a href="{{ route('admin-rent') }}" class="btn btn-outline-warning">Очистить</a>
                        @endif
                    </div>
                </div>
            </form>

        </div>
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                        <thead>
                        <tr>
                            <th class="text-center">№</th>
                            <th class="text-center">ФИО</th>
                            <th class="text-center">E-mail</th>
                            <th class="text-center">Телефон</th>
                            <th class="text-center">Дата обращения</th>
                            <th></th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($rents as $rent)
                        <tr>
                            <td class="text-center">{{$rent->id}}</td>
                            <td class="text-center">{{$rent->name}}</td>
                            <td class="text-center">{{$rent->email}}</td>
                            <td class="text-center">{{$rent->phone}}</td>
                            <td class="text-center">{{date('d.m.Y H:i', strtotime($rent->created_at))}}</td>
                            <td class="text-center">@if($rent->is_new) <small class="badge badge-primary">Новое</small> @else <small class="badge badge-secondary">Просмотрено</small> @endif</td>
                            <td>
                                <a href="{{route('admin-rent-show', $rent->id)}}" class="btn btn-outline-warning btn-sm"><i class="fas fa-pencil-alt"></i></a>
                                <span data-target="#drop_post_{{$rent->id}}" data-toggle="modal" class="btn btn-outline-danger btn-sm ml-2"><i class="fas fa-times"></i></span>
                                <form onsubmit="true" action="{{route('admin-rent-delete', $rent->id)}}" method="post" id="drop-form-{{$rent->id}}">
                                    @method('DELETE')
                                    @csrf
                                    <div class="modal fade" id="drop_post_{{$rent->id}}">
                                        <div class="modal-dialog">
                                            <div class="modal-content bg-danger">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <p>Вы действительно хотите удалить заявку №{{$rent->id}} ?</p>
                                                    <p class="small">* Данное действие невозможно будет отменить!</p>
                                                </div>
                                                <div class="modal-footer justify-content-between">
                                                    <button type="submit" class="btn btn-outline-light">Удалить</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </td>
                        </tr>
                        @empty
                            <tr><td colspan="10" style="text-align: center">Список пуст</td></tr>
                        @endforelse
                        </tbody>
                    </table>
                </div>
                <div class="card-footer">
                    {{$rents->links('admin.layouts.paginate')}}
                </div>
    </div>
@endsection
