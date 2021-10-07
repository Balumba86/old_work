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
                    <canvas id="subscribers" height="200"></canvas>
                </div>
                <div class="col-lg-6 col-12">
                    <canvas id="residents" style="min-height: 250px; height: 250px; max-height: 480px; max-width: 100%;"></canvas>
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
            const labelsSubscribers = [
                'Январь',
                'February',
                'March',
                'April',
                'May',
                'June',
            ];
            const dataSubscribers = {
                labels: labelsSubscribers,
                datasets: [
                    {
                        label: 'Подписки',
                        backgroundColor: 'rgb(2,152,21)',
                        borderColor: 'rgb(2,152,21)',
                        data: [0, 10, 5, 11, 20, 30, 45],
                        fill: "QQQQQQ"
                    },
                    {
                        label: 'Отписки',
                        backgroundColor: 'rgb(246,26,72)',
                        borderColor: 'rgb(246,26,72)',
                        data: [0, 0, 0, 2, 20, 30, 45],
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

            const DATA_COUNT = 5;
            const NUMBER_CFG = {count: DATA_COUNT, min: 0, max: 100};

            const dataResidents = {
                labels: ['Уровень 1', 'Уровень 2', 'Уровень 3', 'Уровень 4'],
                datasets: [
                    {
                        label: 'Dataset 1',
                        data: [
                            {{$residents_levels[0]}},
                            {{$residents_levels[1]}},
                            {{$residents_levels[2]}},
                            {{$residents_levels[3]}},
                        ],
                        backgroundColor: [
                            'rgb(255, 99, 132)',
                            'rgb(54, 162, 235)',
                            'rgb(255, 205, 86)',
                            'rgb(179,86,255)'
                        ],
                        hoverOffset: 4
                    }
                ]
            };
            const configResidents = {
                type: 'doughnut',
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
