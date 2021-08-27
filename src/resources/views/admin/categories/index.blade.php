@extends('admin.layouts.index')
@section('title-page')Категории услуг/товаров@endsection
@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Категории услуг/товаров</h3>
        </div>
        <div class="card-body table-responsive p-0">
            <table class="table table-striped table-valign-middle">
                <thead>
                <tr>
                    <th>Название</th>
                    <th>Тип категории</th>
                    <th>Тэги</th>
                    <th><a href="{{route('admin-category-add')}}" class="btn bg-gradient-info"><i class="fas fa-plus"></i></a></th>
                </tr>
                </thead>
                <tbody>
                @forelse($categories as $category)
                    <tr>
                        <td>
                            <img src="{{Storage::url($category->image_url)}}" alt="" class="img-size-32 mr-2" data-toggle="modal" data-target="#preview-img-{{$category->id}}">
                            {{$category->small_title}}
                            <div class="modal fade" id="preview-img-{{$category->id}}">
                                <div class="modal-dialog modal-sm">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <img src="{{Storage::url($category->image_url)}}" style="width: 100%">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td>{{$category->category_type}}</td>
                        <td>{{$category->tags_list}}</td>
                        <td>
                            <a href="{{route('admin-category-edit', $category->id)}}" class="text-muted">
                                <i class="fas fa-edit"></i>
                            </a>
                            <button type="button" class="btn-danger" style="margin-left: 10px" data-toggle="modal" data-target="#modal-{{$category->id}}">
                                <i class="fas fa-trash"></i>
                            </button>
                            <div class="modal fade" id="modal-{{$category->id}}">
                                <div class="modal-dialog">
                                    <div class="modal-content ">
                                        <form action="{{route('admin-category-delete', $category->id)}}" method="post">
                                            @csrf
                                        <div class="modal-header">
                                            <h4 class="modal-title">Внимание!</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span></button>
                                        </div>
                                        <div class="modal-body">
                                            <p>Вы действительно хотите удалить "{{$category->small_title}}"</p>
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
                    <tr><td colspan="5" style="text-align: center">Ничего нет</td></tr>
                @endforelse

                </tbody>
            </table>
        </div>
    </div>
    <div class="card-footer">
        {{$categories->links('admin.layouts.paginate')}}
    </div>
    </div>
@endsection
