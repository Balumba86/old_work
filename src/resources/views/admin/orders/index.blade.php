@extends('admin.layouts.index')
@section('title-page')Заказы@endsection
@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Заказы</h3>
        </div>
        <div class="card-header">
            <form action="{{route('admin-orders')}}" method="get">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="form-group">
                            <input class="form-control" type="text" placeholder="Номер заказа" name="order_number" value="{{ request()->order_number }}">
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="form-group">
                            <input class="form-control" type="text" placeholder="ФИО клиента" name="client_name" value="{{ request()->client_name }}">
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="form-group">
                            <input class="form-control" type="text" placeholder="Номер телефона клиента" name="client_phone" value="{{ request()->client_phone }}">
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <button type="submit" class="btn bg-gradient-info">Применить</button>
                        <a href="{{ route('admin-orders') }}" class="btn bg-gradient-warning">Сбросить</a>
                    </div>
                </div>
            </form>
        </div>
        <div class="card-body table-responsive p-0">
            <table class="table table-hover text-nowrap">
                <thead>
                <tr>
                    <th>id</th>
                    <th>Агбис id</th>
                    <th>Номер</th>
                    <th>Оплата</th>
                    <th>Дата/Время</th>
                    <th>Статус</th>
                    <th>Категория</th>
                    <th>Тип заказа</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @forelse($orders as $order)
                <tr>
                    <td>{{$order->id}}</td>
                    <td>{{$order->agbis_id}}</td>
                    <td>{{$order->order_number}}</td>
                    <td>{{$order->pay_method}}</td>
                    <td>{{$order->date_of_creation}}</td>
                    <td>{{$order->enum_status}}</td>
                    <td>{{$order->category}}</td>
                    <td>{{$order->type}}</td>
                    <td><a href="{{route('admin-order-view', $order->id)}}" class="btn bg-gradient-info"><i class="far fa-eye"></i></a></td>
                </tr>
                @empty
                    <tr><td colspan="10" style="text-align: center">Заказов нет</td></tr>
                @endforelse
                </tbody>
            </table>
        </div>
        <div class="card-footer">
            {{$orders->links('admin.layouts.paginate')}}
        </div>
    </div>
@endsection
