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
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3>{{$count_shops}}</h3>
                            <p>Магазины</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-shopping-bag"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-12">
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3>{{$count_cafe}}</h3>
                            <p>Кафе и рестораны</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-utensils"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-12">
                    <div class="small-box bg-warning">
                        <div class="inner">
                            <h3>{{$count_services}}</h3>
                            <p>Сервисы и услуги</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-icons"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-12">
                    <div class="small-box bg-danger">
                        <div class="inner">
                            <h3>{{$count_requests}}</h3>
                            <p>Заявки на аренду</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-bullhorn"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-footer">

        </div>
    </div>
@endsection
