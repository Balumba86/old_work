@extends('admin.layouts.index')
@section('title-page')Условия логистических сервисов@endsection
@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Условия логистических сервисов</h3>
        </div>
        <div class="card-body table-responsive p-0">
            <table class="table table-hover text-nowrap">
                <thead>
                <tr>
                    <th>id</th>
                    <th>Название</th>
                    <th><a href="{{route('admin-stipulations-add')}}" class="btn bg-gradient-success">+</a></th>
                </tr>
                </thead>
                <tbody>
                @forelse($stipulations as $stipulation)
                <tr>
                    <td>{{$stipulation->id}}</td>
                    <td>{{$stipulation->title}}</td>
                    <td>
                        <a href="{{route('admin-stipulations-edit', $stipulation->id)}}" class="text-muted">
                            <i class="fas fa-edit"></i>
                        </a>
                        <button type="button" class="btn-danger" style="margin-left: 10px" data-toggle="modal" data-target="#modal-{{$stipulation->id}}">
                            <i class="fas fa-trash"></i>
                        </button>
                        <div class="modal fade" id="modal-{{$stipulation->id}}">
                            <div class="modal-dialog">
                                <div class="modal-content ">
                                    <form action="{{route('admin-stipulations-delete', $stipulation->id)}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <div class="modal-header">
                                            <h4 class="modal-title">Внимание!</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span></button>
                                        </div>
                                        <div class="modal-body">
                                            <p>Вы действительно хотите условие "{{$stipulation->title}}"?</p>
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
            {{ $stipulations->links('admin.layouts.paginate') }}
        </div>
    </div>
@endsection
