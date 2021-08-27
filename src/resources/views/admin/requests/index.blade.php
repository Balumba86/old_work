@extends('admin.layouts.index')
@section('title-page')Заказы@endsection
@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Заказы</h3>
        </div>
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                        <thead>
                        <tr>
                            <th>id</th>
                            <th>Номер</th>
                            <th>Оплата</th>
                            <th>Создан</th>
                            <th>Статус</th>
                            <th>Категория</th>
                            <th>Заявка на дату\время</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($orders as $order)
                        <tr>
                            <td>{{$order->id}}</td>
                            <td>{{$order->order_number}}</td>
                            <td>{{$order->pay_method}}</td>
                            <td>{{$order->date_of_creation}}</td>
                            <td>{{$order->enum_status}}</td>
                            <td>{{$order->category}}</td>
                            <td>@if($order->pickup_date) {{date('d.m.Y', strtotime($order->pickup_date))}} @endif {{$order->time_start_request}}-{{$order->time_end_request}}</td>
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
