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
            <div class="row">
                <div class="col-lg-6 col-12">
                    <canvas id="subscribers" height="180"></canvas>
                </div>
                <div class="col-lg-6 col-12">
                    <canvas id="residents" height="180"></canvas>
                </div>
            </div>
        </div>
        <div class="card-footer">

        </div>
    </div>
@endsection
@push('scripts')
{{--    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.5.1/chart.min.js" defer></script>--}}
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        $(function () {
            var labelsSubscribers = [
                '01.03.2022',
                '02.03.2022',
                '03.03.2022',
                '04.03.2022',
                '05.03.2022',
                '06.03.2022',
                '07.03.2022'
            ];
            var dataSubscribers = {
                labels: labelsSubscribers,
                datasets: [
                    {
                        label: 'Подписки',
                        backgroundColor: 'rgb(2,152,21)',
                        borderColor: 'rgb(2,152,21)',
                        data: [10, 5, 11, 20, 30, 45, 147]
                    },
                    {
                        label: 'Отписки',
                        backgroundColor: 'rgb(246,26,72)',
                        borderColor: 'rgb(246,26,72)',
                        data: [0, 0, 2, 20, 30, 45, 0]
                    },
                ]
            };
            var configSubscribers = {
                type: 'line',
                data: dataSubscribers,
                options: {
                    plugins: {
                        filler: {
                            propagate: false,
                        },
                        title: {
                            display: true,
                            text: (ctx) => "Подписки на рассылку"
                        }
                    },
                    interaction: {
                        intersect: false,
                    },
                    elements: {
                        line: {
                            tension: 0.4
                        }
                    }
                }
            }
            var subscribers = new Chart(
                document.getElementById('subscribers'),
                configSubscribers
            );

            var DATA_COUNT = 5;
            var NUMBER_CFG = {count: DATA_COUNT, min: 0, max: 100};
            var dataResidents = {
                labels: ['Уровень 1', 'Уровень 2', 'Уровень 3', 'Уровень 4'],
                datasets: [
                    {
                        label: 'Магазины',
                        data: [
                            {{$residents_levels['shop'][0]}},
                            {{$residents_levels['shop'][1]}},
                            {{$residents_levels['shop'][2]}},
                            {{$residents_levels['shop'][3]}},
                        ],
                        backgroundColor: 'rgb(49, 137, 197)',
                        borderColor: 'rgb(49, 137, 197)'
                    },
                    {
                        label: 'Кафе/рестораны',
                        data: [
                            {{$residents_levels['restaurant'][0]}},
                            {{$residents_levels['restaurant'][1]}},
                            {{$residents_levels['restaurant'][2]}},
                            {{$residents_levels['restaurant'][3]}},
                        ],
                        backgroundColor: 'rgb(3, 169, 127)',
                        borderColor: 'rgb(3, 169, 127)'
                    },
                    {
                        label: 'Сервисы/услуги',
                        data: [
                            {{$residents_levels['services'][0]}},
                            {{$residents_levels['services'][1]}},
                            {{$residents_levels['services'][2]}},
                            {{$residents_levels['services'][3]}},
                        ],
                        backgroundColor: 'rgb(208, 58, 127)',
                        borderColor: 'rgb(208, 58, 127)'
                    },
                ]
            };
            var configResidents = {
                type: 'bar',
                data: dataResidents,
                options: {
                    responsive: true,
                    plugins: {
                        legend: {
                            position: 'top',
                        },
                        title: {
                            display: true,
                            text: 'Резидентов на уровнях'
                        }
                    }
                },
            };
            var residents = new Chart(
                document.getElementById('residents'),
                configResidents
            );
        })
    </script>
@endpush
