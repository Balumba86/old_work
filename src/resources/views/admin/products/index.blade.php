@extends('admin.layouts.index')
@section('title-page')Товары@endsection
@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Товары</h3>
        </div>
        <div class="card-body table-responsive p-0">
            <table class="table table-striped table-valign-middle">
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
                    <th><a href="{{route('admin-products-create')}}" class="btn bg-gradient-info"><i class="fas fa-plus"></i></a></th>
                </tr>
                </thead>
                <tbody>
                @forelse($products as $product)
                    <tr>
                        <td>{{ $product->id }}</td>
                        <td>{{ $product->title }}</td>
                        <td>{{ $product->category ? $product->category->small_title : "N/A" }}</td>
                        <td>
                            @if($product->special_price)
                                <s>{{ $product->price }}</s>
                            @else
                                {{ $product->price }}
                            @endif
                        </td>
                        <td>{{ $product->special_price }}</td>
                        <td>
                            <small class="badge" style="background: {{ $product->label_color }}">
                                {{ $product->label }}
                            </small>
                        </td>
                        <td>
                            {{ $product->fastService ? $product->fastService->title : "N/A" }}
                        </td>
                        <td>
                            {{ $product->tags_list }}
                        </td>
                        <td>
                            <a href="{{route('admin-products-edit', $product->id)}}" class="text-muted">
                                <i class="fas fa-edit"></i>
                            </a>
                            <button type="button" class="btn-danger" style="margin-left: 10px" data-toggle="modal" data-target="#modal-{{$product->id}}">
                                <i class="fas fa-trash"></i>
                            </button>
                            <div class="modal fade" id="modal-{{$product->id}}">
                                <div class="modal-dialog">
                                    <div class="modal-content ">
                                        <form action="{{route('admin-products-delete', ['product' => $product->id])}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <div class="modal-header">
                                                <h4 class="modal-title">Внимание!</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span></button>
                                            </div>
                                            <div class="modal-body">
                                                <p>Вы действительно хотите удалить продукт "{{$product->title}}"</p>
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
        {{$products->links('admin.layouts.paginate')}}
    </div>
    </div>
@endsection
