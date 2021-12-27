@extends('admin.layouts.index')
@section('title-page')Галлерея ТЦ@endsection
@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Галлерея ТЦ</h3>
        </div>
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                        <thead>
                        <tr>
                            <th>Альтернативный текст</th>
                            <th class="text-center">Тип</th>
                            <th class="text-center"><a href="{{route('admin-gallery-add')}}" class="btn btn-outline-success btn-sm"><i class="fas fa-plus"></i></a></th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($items as $item)
                        <tr>
                            <td>{{$item->alt}}</td>
                            <td class="text-center">@if($item->type === 'video') Видео @else Картинка @endif</td>
                            <td class="text-center">
                                <span data-target="#view_item_{{$item->id}}" data-toggle="modal" class="btn btn-outline-info btn-sm ml-2"><i class="fas fa-eye"></i></span>
                                <span data-target="#drop_post_{{$item->id}}" data-toggle="modal" class="btn btn-outline-danger btn-sm ml-2"><i class="fas fa-times"></i></span>
                                <form onsubmit="true" action="{{route('admin-gallery-delete', $item->id)}}" method="post" id="drop-form-{{$item->id}}">
                                    @method('DELETE')
                                    @csrf
                                    <div class="modal fade" id="drop_post_{{$item->id}}">
                                        <div class="modal-dialog">
                                            <div class="modal-content bg-danger">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <p>Вы действительно хотите удалить элемент "{{$item->alt}}"?</p>
                                                    <p class="small">* Данное действие невозможно будет отменить!</p>
                                                </div>
                                                <div class="modal-footer justify-content-between">
                                                    <button type="submit" class="btn btn-outline-light">Удалить</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <div class="modal fade" id="view_item_{{$item->id}}">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content bg-dark">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                @if($item->type === 'video')
                                                    <iframe width="100%" height="315" src="{{$item->path}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                                @else
                                                    <img src="{{$item->path}}" width="100%" alt="">
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        @empty
                            <tr><td colspan="4" style="text-align: center">Список пуст</td></tr>
                        @endforelse
                        </tbody>
                    </table>
                </div>
                <div class="card-footer">
                    {{$items->links('admin.layouts.paginate')}}
                </div>
    </div>
@endsection
