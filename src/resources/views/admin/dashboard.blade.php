@extends('admin.layouts.index')
@section('title-page')Главная@endsection
@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Сводка</h3>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-lg-3 col-12">
                    <div class="small-box bg-gradient-info">
                        <div class="inner">
                            <h3>{{$count_shops}}</h3>
                            <p>Магазины</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-shopping-bag"></i>
                        </div>
                        <a href="{{route('admin-shop')}}" class="small-box-footer">Перейти к списку</a>
                    </div>
                </div>
                <div class="col-lg-3 col-12">
                    <div class="small-box bg-gradient-success">
                        <div class="inner">
                            <h3>{{$count_cafe}}</h3>
                            <p>Кафе и рестораны</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-utensils"></i>
                        </div>
                        <a href="{{route('admin-restaurant')}}" class="small-box-footer">Перейти к списку</a>
                    </div>
                </div>
                <div class="col-lg-3 col-12">
                    <div class="small-box bg-gradient-pink">
                        <div class="inner">
                            <h3>{{$count_services}}</h3>
                            <p>Сервисы и услуги</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-icons"></i>
                        </div>
                        <a href="{{route('admin-service')}}" class="small-box-footer">Перейти к списку</a>
                    </div>
                </div>
                <div class="col-lg-3 col-12">
                    <div class="small-box bg-gradient-danger">
                        <div class="inner">
                            <h3>{{$count_requests}}</h3>
                            <p>Заявки на аренду</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-bullhorn"></i>
                        </div>
                        <a href="{{route('admin-rent')}}" class="small-box-footer">Перейти к списку</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-footer">

        </div>
    </div>
@endsection
