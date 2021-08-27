@extends('admin.layouts.index')
@section('title-page')Услуги@endsection
@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Услуги</h3>
        </div>
        <div class="card-header">
            <form action="{{route('admin-services')}}" method="get">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="form-group">
                            <input class="form-control" type="text" placeholder="Название" name="title" value="{{ request()->title }}">
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="form-group">
                            <input class="form-control" type="number" placeholder="Цена" name="price" value="{{ request()->price }}">
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="form-group">
                            <input class="form-control" type="number" placeholder="Скидка" name="discount" value="{{ request()->discount }}">
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <button type="submit" class="btn bg-gradient-info">Применить</button>
                        <a href="{{ route('admin-services') }}" class="btn bg-gradient-warning">Сбросить</a>
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
                            <th>Категория</th>
                            <th>Цена</th>
                            <th>Специальная цена</th>
                            <th>Метка</th>
                            <th>Логистический сервис</th>
                            <th>Тэги</th>
                            <th><a href="{{route('admin-services-add')}}" class="btn bg-gradient-info">+</a></th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($services as $service)
                        <tr>
                            <td>{{ $service->id }}</td>
                            <td>{{ $service->title }}</td>
                            <td>{{ $service->category ? $service->category->small_title : "N/A" }}</td>
                            <td>
                                @if($service->special_price)
                                    <s>{{ $service->price }}</s>
                                @else
                                    {{ $service->price }}
                                @endif
                            </td>
                            <td>{{ $service->special_price }}</td>
                            <td>
                                <small class="badge" style="background: {{ $service->label_color }}">
                                    {{ $service->label }}
                                </small>
                            </td>
                            <td>
                                {{ $service->fastService ? $service->fastService->title : "N/A" }}
                            </td>
                            <td>
                                {{ $service->tags_list }}
                            </td>
                            <td>
                                <a href="{{route('admin-services-edit', $service->id)}}" class="text-muted">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <button type="button" class="btn-danger" style="margin-left: 10px" data-toggle="modal" data-target="#modal-{{$service->id}}">
                                    <i class="fas fa-trash"></i>
                                </button>
                                <div class="modal fade" id="modal-{{$service->id}}">
                                    <div class="modal-dialog">
                                        <div class="modal-content ">
                                            <form action="{{route('admin-services-delete', $service->id)}}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Внимание!</h4>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span></button>
                                                </div>
                                                <div class="modal-body">
                                                    <p>Вы действительно хотите удалить сервис "{{$service->title}}"</p>
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
                            <tr><td colspan="10" style="text-align: center">Сервисов нет</td></tr>
                        @endforelse
                        </tbody>
                    </table>
                </div>
                <div class="card-footer">
                    {{$services->links('admin.layouts.paginate')}}
                </div>
    </div>
@endsection
