@extends('admin.layouts.index')
@section('title-page')Карточка клиента@endsection
@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Карточка клиента</h3>
        </div>
        <div class="card-body table-responsive p-0">
                <div class="card">
                    <div class="card-body">
                        <table class="table table-hover text-nowrap">
                            <thead>
                            <th>#</th>
                            <th>Агбис id</th>
                            <th>Имя</th>
                            <th>Телефон</th>
                            <th>E-mail</th>
                            <th>Дата регистрациии</th>
                            </thead>
                            <tbody>
                            <tr>
                                <td>{{$client->id}}</td>
                                <td>{{$client->agbis_id}}</td>
                                <td>{{$client->first_name}}</td>
                                <td>{{$client->phone}}</td>
                                <td>{{$client->user_email}}</td>
                                <td>{{date('d.m.Y', strtotime($client->date_create))}}</td>
                            </tr>
                            <tr><td colspan="10" style="text-align: center"><strong>Дополнительные телефоны</strong></td></tr>
                            @forelse($phones as $phone)
                                <tr>
                                    <td colspan="10">{{$phone->phone}}</td>
                                </tr>
                            @empty
                                <tr><td colspan="10" style="text-align: center">Нет</td></tr>
                            @endforelse
                            </tbody>
                        </table>
                    </div>
                    <div class="card-header">
                        <h3 class="card-title">Адреса клиента</h3>
                    </div>
                    <div class="card-body">
                        <table class="table table-hover text-nowrap">
                            <thead>
                            <th>Адрес</th>
                            <th>Описание</th>
                            </thead>
                            <tbody>
                            @foreach($client->addresses as $address)
                                <tr>
                                    <td>{{ $address->address }}</td>
                                    <td>{{ $address->text_description }}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="card-header">
                        <h3 class="card-title">Заказы</h3>
                    </div>
                    <div class="card-footer">
                        <table class="table table-hover text-nowrap">
                            <thead>
                            <th>#</th>
                            <th>Агбис id</th>
                            <th>Сумма</th>
                            <th>Долг</th>
                            <th>Дата</th>
                            </thead>
                            <tbody>
                            @forelse($orders as $order)
                                <tr>
                                    <td>{{$order->id}}</td>
                                    <td><a href="{{route('admin-order-view', $order->id)}}">{{$order->agbis_id}}</a></td>
                                    <td>{{$order->cost}}</td>
                                    <td>{{($order->cost - $order->payed_amount)}} <i class="fas fa-ruble-sign"></i></td>
                                    <td>{{date('d.m.Y H:i', strtotime($order->date_of_creation))}}</td>
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
                    <div class="card-footer">
                        <a href="{{ url()->previous() }}" class="btn bg-gradient-warning">Назад</a>
                    </div>
                </div>
        </div>
    </div>
@endsection
