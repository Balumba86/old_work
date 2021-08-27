@extends('admin.layouts.index')
@section('title-page')Главная@endsection
@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Сводка</h3>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-lg-4 col-12">
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3>{{$count_requests}}</h3>
                            <p>Заявки</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-bullhorn"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-12">
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3>{{$count_orders}}</h3>
                            <p>Заказы</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-shopping-bag"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-12">
                    <div class="small-box bg-warning">
                        <div class="inner">
                            <h3>{{$count_clients}}</h3>
                            <p>Клиентов</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-user-alt"></i>
                        </div>
                    </div>
                </div>
            </div>
            <form action="{{route('dashboard-save-email')}}" method="post">
                @csrf
                <div class="row">
                    <div class="col-lg-10 col-12">
                        <div class="form-group">
                            <input class="form-control" type="email" name="email_by_request" placeholder="E-mail для отправки заявок" value="{{$email_request->email ?? ''}}" required>
                        </div>
                    </div>
                    <div class="col-lg-2 col-12">
                        <div class="form-group">
                            <button type="submit" class="btn btn-block btn-info ">Сохранить</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="card-footer">

        </div>
    </div>
@endsection
