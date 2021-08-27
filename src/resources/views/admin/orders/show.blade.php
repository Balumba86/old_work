@extends('admin.layouts.index')
@section('title-page')Заказ {{$order->id}}@endsection
@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Заказ {{$order->id}}</h3>
        </div>
        <div class="card-body table-responsive p-0">
                <div class="card">
                    <div class="card-body">
                        <table class="table table-hover text-nowrap">
                            <thead>
                            <th>Категория</th>
                            <th>Номер</th>
                            <th>Cумма</th>
                            <th>Тип оплаты</th>
                            <th>Дата</th>
                            <th>Статус</th>
                            <th>Скидка</th>
                            <th>Долг</th>
                            <th>Дата оплаты</th>
                            <th>Статус выполнения</th>
                            <th>Тип заказа</th>
                            <th>Заявка на дату\время</th>
                            </thead>
                            <tbody>
                            <tr>
                                <td>{{$order->category}}</td>
                                <td>{{$order->order_number}}</td>
                                <td>{{$order->cost}}</td>
                                <td>{{$order->pay_method}}</td>
                                <td>{{$order->date_of_creation}}</td>
                                <td>{{$order->enum_status}}</td>
                                <td>{{$order->discount}}</td>
                                <td>{{($order->cost - $order->payed_amount)}}</td>
                                <td>{{($order->date_paid)}}</td>
                                <td>{{$order->job_status}}</td>
                                <td>{{$order->type}}</td>
                                <td>@if($order->pickup_date) {{date('d.m.Y', strtotime($order->pickup_date))}} @endif {{$order->time_start_request}}-{{$order->time_end_request}}</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="card-header">
                        <h3 class="card-title">Услуги</h3>
                    </div>
                    <div class="card-footer">
                        <table class="table table-hover text-nowrap">
                            <thead>
                            <th>Название</th>
                            <th>Описание</th>
                            <th>Цена</th>
                            <th>Скидка</th>
                            <th>Новый</th>
                            </thead>
                            <tbody>
                            @forelse($order->services as $service)
                                <tr>
                                    <td>{{$service->title}}</td>
                                    <td>{{$service->description_text}}</td>
                                    <td>{{$service->price}}</td>
                                    <td>{{$service->discount}}</td>
                                    <td>@if($service->is_new)Да@elseНет@endif</td>
                                </tr>
                            @empty
{{--                                <tr><td colspan="10" style="text-align: center">Заказов нет</td></tr>--}}
                            @endforelse
                            @forelse($order->agbisServices as $service)
                                <tr>
                                    <td>{{$service->title}}</td>
                                    <td>{{$service->description_text}}</td>
                                    <td>{{$service->price}}</td>
                                    <td>{{$service->discount}}</td>
                                    <td>@if($service->is_new)Да@elseНет@endif</td>
                                </tr>
                            @empty
{{--                                <tr><td colspan="10" style="text-align: center">Заказов нет</td></tr>--}}
                            @endforelse
                            </tbody>
                        </table>
                    </div>
                    <div class="card-header">
                        <h3 class="card-title">Клиент</h3>
                    </div>
                    <div class="card-footer">
                        <table class="table table-hover text-nowrap">
                            <thead>
                            <th>Имя</th>
                            <th>Агбис id</th>
                            <th>Телефон</th>
                            </thead>
                            <tbody>
                            @if($client)
                            <tr>
                                <td>{{$client->first_name}}</td>
                                <td>{{$client->agbis_id}}</td>
                                <td><a href="{{route('admin-client-show', $client->id)}}">{{$client->phone}}</a></td>
                            </tr>
                            @else
                                <tr>
                                    <td colspan="3">Клиент не найден</td>
                                </tr>
                            @endif
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer">
                        <a href="{{ url()->previous() }}" class="btn bg-gradient-warning">Назад</a>
                    </div>
                </div>
        </div>
    </div>
@endsection
