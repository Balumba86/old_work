@extends('admin.layouts.index')
@section('title-page')Пункты приёма@endsection
@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Пункты приёма</h3>
        </div>
        <div class="card-header">
            <form action="{{route('admin-points')}}" method="get">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="form-group">
                            <input class="form-control" type="text" placeholder="Название" name="name" value="{{ request()->name }}">
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="form-group">
                            <input class="form-control" type="text" placeholder="Адрес" name="address" value="{{ request()->address }}">
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="form-group">
                            <input class="form-control" type="text" placeholder="Телефон" name="phone" value="{{ request()->phone }}">
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <button type="submit" class="btn bg-gradient-info">Применить</button>
                        <a href="{{ route('admin-points') }}" class="btn bg-gradient-warning">Сбросить</a>
                    </div>
                </div>
            </form>

        </div>

                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                        <thead>
                        <tr>
                            <th>id</th>
                            <th>Название</th>
                            <th>Адрес</th>
                            <th>Телефон</th>
                            <th>Экспресс</th>
                            <th>Активен</th>
                            <th><a href="{{route('admin-points-add')}}" class="btn bg-gradient-success">+</a></th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($points as $point)
                        <tr>
                            <td>{{$point->id}}</td>
                            <td>{{$point->name}}</td>
                            <td>{{$point->address}}</td>
                            <td>{{$point->phone}}</td>
                            <td>{{ ($point->is_express) ? 'Да' : 'Нет' }}</td>
                            <td>{{ ($point->is_active) ? 'Да' : 'Нет' }}</td>
                            <td>
                                <a href="{{route('admin-points-edit', $point->id)}}" class="text-muted">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <button type="button" class="btn-danger" style="margin-left: 10px" data-toggle="modal" data-target="#modal-{{$point->id}}">
                                    <i class="fas fa-trash"></i>
                                </button>
                                <div class="modal fade" id="modal-{{$point->id}}">
                                    <div class="modal-dialog">
                                        <div class="modal-content ">
                                            <form action="{{route('admin-points-delete', $point->id)}}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Внимание!</h4>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span></button>
                                                </div>
                                                <div class="modal-body">
                                                    <p>Вы действительно хотите удалить "{{$point->name}}"</p>
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
                    {{$points->links('admin.layouts.paginate')}}
                </div>
    </div>
@endsection
