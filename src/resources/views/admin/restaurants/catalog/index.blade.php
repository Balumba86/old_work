@extends('admin.layouts.index')
@section('title-page')Каталог кафе и ресторанов@endsection
@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Каталог кафе и ресторанов</h3>
        </div>
        <div class="card-header">
            <form action="{{route('admin-restaurant')}}" method="GET">
                <div class="row">
                    <div class="col-sm-11">
                        <div class="form-group">
                            <input class="form-control" type="text" placeholder="Поиск" name="search" value="{{ request()->search }}">
                        </div>
                    </div>
                    <div class="col-sm-1">
                        <button type="submit" class="btn btn-outline-info"><i class="fas fa-search"></i></button>
                    </div>
                </div>
            </form>

        </div>
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                        <thead>
                        <tr>
                            <th>Заголовок</th>
                            <th class="text-center">Показывать на главной</th>
                            <th class="text-center">Часы работы</th>
                            <th class="text-center">Телефон</th>
                            <th class="text-center">Добавлена</th>
                            <th class="text-center">Категория</th>
                            <th><a href="{{route('admin-restaurant-add')}}" class="btn btn-outline-success btn-sm"><i class="fas fa-plus"></i></a></th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($restaurants as $restaurant)
                        <tr>
                            <td>{{$restaurant->title}}</td>
                            <td class="text-center">@if($restaurant->show_main) <i class="fas fa-check"></i> @else <i class="fas fa-times"></i> @endif</td>
                            <td class="text-center">{{$restaurant->hours_work}}</td>
                            <td class="text-center">{{$restaurant->phone ?? '---'}}</td>
                            <td class="text-center">{{date('d.m.Y H:i', strtotime($restaurant->created_at))}}</td>
                            <td class="text-center">
                                @foreach($categories as $cat)
                                    @if($cat->id === $restaurant->category){{$cat->title}}@endif
                                @endforeach
                            </td>
                            <td>
                                <a href="{{route('admin-restaurant-edit', $restaurant->id)}}" class="btn btn-outline-warning btn-sm"><i class="fas fa-pencil-alt"></i></a>
                                <span data-target="#drop_post_{{$restaurant->id}}" data-toggle="modal" class="btn btn-outline-danger btn-sm ml-2"><i class="fas fa-times"></i></span>
                                <form onsubmit="true" action="{{route('admin-restaurant-delete', $restaurant->id)}}" method="post" id="drop-form-{{$restaurant->id}}">
                                    @method('DELETE')
                                    @csrf
                                    <div class="modal fade" id="drop_post_{{$restaurant->id}}">
                                        <div class="modal-dialog">
                                            <div class="modal-content bg-danger">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <p>Вы действительно хотите удалить заведение "{{$restaurant->title}}"?</p>
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
                    {{$restaurants->links('admin.layouts.paginate')}}
                </div>
    </div>
@endsection
