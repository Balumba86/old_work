@extends('admin.layouts.index')
@section('title-page')Логистические сервисы@endsection
@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Логистические сервисы</h3>
        </div>
        <div class="card-body table-responsive p-0">
            <table class="table table-hover text-nowrap">
                <thead>
                <tr>
                    <th>id</th>
                    <th>Название</th>
                    <th><a href="{{route('admin-fast-services-add')}}" class="btn bg-gradient-success">+</a></th>
                </tr>
                </thead>
                <tbody>
                @forelse($services as $service)
                <tr>
                    <td>{{$service->id}}</td>
                    <td>{{$service->title}}</td>
                    <td>
                        <a href="{{route('admin-fast-services-edit', $service->id)}}" class="text-muted">
                            <i class="fas fa-edit"></i>
                        </a>
                        <button type="button" class="btn-danger" style="margin-left: 10px" data-toggle="modal" data-target="#modal-{{$service->id}}">
                            <i class="fas fa-trash"></i>
                        </button>
                        <div class="modal fade" id="modal-{{$service->id}}">
                            <div class="modal-dialog">
                                <div class="modal-content ">
                                    <form action="{{route('admin-fast-services-delete', $service->id)}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <div class="modal-header">
                                            <h4 class="modal-title">Внимание!</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span></button>
                                        </div>
                                        <div class="modal-body">
                                            <p>Вы действительно хотите удалить "{{$service->title}}"</p>
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
            {{$services->links('admin.layouts.paginate')}}
        </div>
    </div>
@endsection
