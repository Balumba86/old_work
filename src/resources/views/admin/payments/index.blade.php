@extends('admin.layouts.index')
@section('title-page')Оплаты@endsection
@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Оплаты</h3>
        </div>
        <div class="card-header">
            <form action="{{route('admin-payments')}}" method="get">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="form-group">
                            <input class="form-control" type="text" placeholder="Заказ" name="order_id" value="{{ request()->order_id }}">
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <select name="status" class="form-control">
                                <option value="" selected disabled>---</option>
                                <option value="process" @if(request()->status === 'process') selected @endif>В процессе</option>
                                <option value="succeeded" @if(request()->status === 'succeeded') selected @endif>Выполнена</option>
                                <option value="failed" @if(request()->status === 'failed') selected @endif>Ошибка</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <button type="submit" class="btn bg-gradient-info">Применить</button>
                        <a href="{{ route('admin-payments') }}" class="btn bg-gradient-warning">Сбросить</a>
                    </div>
                </div>
            </form>

        </div>
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Заказ</th>
                            <th>Сумма</th>
                            <th>Статус</th>
                            <th>Дата</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($payments as $payment)
                        <tr>
                            <td>{{$payment->id}}</td>
                            <td>{{$payment->order_id}}</td>
                            <td>{{$payment->amount}}</td>
                            <td>
                                <small class="badge @if($payment->status === 'process') badge-warning @elseif($payment->status === 'failed') badge-danger @else badge-success @endif">{{ $translate_status[$payment->status]}}</small>
                            </td>
                            <td>{{date('d.m.Y H:i', strtotime($payment->created_at))}}</td>
                        </tr>
                        @empty
                            <tr><td colspan="5" style="text-align: center">Список пуст</td></tr>
                        @endforelse
                        </tbody>
                    </table>
                </div>
                <div class="card-footer">
                    {{$payments->links('admin.layouts.paginate')}}
                </div>
    </div>
@endsection
