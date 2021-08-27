@extends('admin.layouts.index')
@section('title-page') Сервисные типы @endsection
@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title"> Сервисные типы </h3>
        </div>
        <div class="card-body table-responsive p-0">
            <table class="table table-striped table-valign-middle">
                <thead>
                <tr>
                    <th>Название</th>
                    <th>Алиас</th>
                    <th>
                        <a href="{{ route('service-type.create') }}" class="btn bg-gradient-info">
                            <i class="fas fa-plus"></i>
                        </a>
                    </th>
                </tr>
                </thead>
                <tbody>
                @forelse($service_type as $item)
                    <tr>
                        <td>{{ $item->title }}</td>
                        <td>{{ $item->alias }}</td>
                        <td>
                            <a href="{{route('service-type.edit', $item->id)}}" class="text-muted">
                                <i class="fas fa-edit"></i>
                            </a>
                            <button type="button" class="btn-danger" style="margin-left: 10px" data-toggle="modal" data-target="#modal-{{ $item->id }}">
                                <i class="fas fa-trash"></i>
                            </button>
                            <div class="modal fade" id="modal-{{ $item->id }}">
                                <div class="modal-dialog">
                                    <div class="modal-content ">
                                        <form action="{{ route('service-type.destroy', $item->id) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <div class="modal-header">
                                                <h4 class="modal-title">Внимание!</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span></button>
                                            </div>
                                            <div class="modal-body">
                                                <p>Вы действительно хотите удалить "{{ $item->title }}"</p>
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
                    <tr>
                        <td colspan="5" style="text-align: center">Ничего нет</td>
                    </tr>
                @endforelse
                </tbody>
            </table>
        </div>
    </div>
    <div class="card-footer">
        {{ $service_type->links('admin.layouts.paginate') }}
    </div>
    </div>
@endsection
