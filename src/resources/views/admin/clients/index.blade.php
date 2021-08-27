@extends('admin.layouts.index')
@section('title-page')Клиенты@endsection
@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Клиенты</h3>
        </div>
        <div class="card-header">
            <form action="{{route('admin-clients')}}" method="get">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="form-group">
                            <input class="form-control" type="text" placeholder="Имя" name="first_name" value="{{ request()->first_name }}">
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="form-group">
                            <input class="form-control" type="text" placeholder="Номер телефона" name="phone" value="{{ request()->phone }}">
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="form-group">
                            <input class="form-control" type="text" placeholder="E-Mail" name="user_email" value="{{ request()->user_email }}">
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <button type="submit" class="btn bg-gradient-info">Применить</button>
                        <a href="{{ route('admin-clients') }}" class="btn bg-gradient-warning">Сбросить</a>
                    </div>
                </div>
            </form>

        </div>
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Агбис ID</th>
                            <th>Имя</th>
                            <th>Телефон</th>
                            <th>E-mail</th>
                            <th>Создан</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($clients as $client)
                        <tr>
                            <td>{{$client->id}}</td>
                            <td>{{$client->agbis_id}}</td>
                            <td>{{$client->first_name}} {{$client->second_name}}</td>
                            <td>{{$client->phone}}</td>
                            <td>{{$client->user_email}}</td>
                            <td>@if($client->date_create) {{date('d.m.Y H:i', strtotime($client->date_create))}}@endif</td>
                            <td><a href="{{route('admin-client-show', $client->id)}}" class="text-muted"><i class="far fa-eye"></i></a></td>
                        </tr>
                        @empty
                            <tr><td colspan="4" style="text-align: center">Список пуст</td></tr>
                        @endforelse
                        </tbody>
                    </table>
                </div>
                <div class="card-footer">
                    {{$clients->links('admin.layouts.paginate')}}
                </div>
    </div>
@endsection
