<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="{{route('admin-dashboard')}}" class="brand-link">
        <img src="/favicon.ico" alt="{{ config('app.name', 'Laravel') }}" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">{{ config('app.name', 'Laravel') }}</span>
    </a>
    <div class="sidebar">
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
{{--                <li class="nav-item"><a href="{{route('dashboard')}}" class="nav-link {{ request()->is('admin') ? 'active' : null }}"><i class="fas fa-home nav-icon"></i><p>Главная</p></a></li>--}}
{{--                <li class="nav-item"><a href="{{route('admin-category')}}" class="nav-link {{ request()->is('admin/category*') ? 'active' : null }}"><i class="fas fa-list-ul nav-icon"></i><p>Категории услуг/товаров</p></a></li>--}}
{{--                <li class="nav-item"><a href="{{route('admin-products')}}" class="nav-link {{ request()->is('admin/product*') ? 'active' : null }}"><i class="fas fa-chess-bishop nav-icon"></i><p>Товары</p></a></li>--}}
{{--                <li class="nav-item"><a href="{{route('admin-points')}}" class="nav-link {{ request()->is('admin/points*') ? 'active' : null }}"><i class="fas fa-map-marker-alt nav-icon"></i><p>Пункты приёма</p></a></li>--}}
{{--                <li class="nav-item"><a href="{{route('admin-services')}}" class="nav-link {{ request()->is('admin/services*') ? 'active' : null }}"><i class="fas fa-taxi nav-icon"></i><p>Услуги</p></a></li>--}}
{{--                <li class="nav-item"><a href="{{route('admin-stipulations')}}" class="nav-link {{ request()->is('admin/stipulations*') ? 'active' : null }}"><i class="fas fa-check-square nav-icon"></i><p>Условия логистических сервисов</p></a></li>--}}
{{--                <li class="nav-item"><a href="{{route('admin-fast-services')}}" class="nav-link {{ request()->is('admin/fast_services*') ? 'active' : null }}"><i class="fas fa-truck nav-icon"></i><p>Логистические сервисы</p></a></li>--}}
{{--                <li class="nav-item"><a href="{{route('admin-requests')}}" class="nav-link {{ request()->is('admin/requests*') ? 'active' : null }}"><i class="fas fa-bullhorn nav-icon"></i><p>Заявки</p></a></li>--}}
{{--                <li class="nav-item"><a href="{{route('admin-orders')}}" class="nav-link {{ request()->is('admin/orders*') ? 'active' : null }}"><i class="fas fa-shopping-bag nav-icon"></i><p>Заказы</p></a></li>--}}
{{--                <li class="nav-item"><a href="{{route('admin-clients')}}" class="nav-link {{ request()->is('admin/clients*') ? 'active' : null }}"><i class="fas fa-user-alt nav-icon"></i><p>Клиенты</p></a></li>--}}
{{--                <li class="nav-item"><a href="{{route('admin-stories')}}" class="nav-link {{ request()->is('admin/stories*') ? 'active' : null }}"><i class="fas fa-images nav-icon"></i><p>Сториз</p></a></li>--}}
{{--                <li class="nav-item"><a href="{{route('admin-payments')}}" class="nav-link {{ request()->is('admin/payments*') ? 'active' : null }}"><i class="fas fa-ruble-sign nav-icon"></i><p>Оплаты</p></a></li>--}}
{{--                <li class="nav-item"><a href="{{route('admin-notifications')}}" class="nav-link {{ request()->is('admin/notifications*') ? 'active' : null }}"><i class="fas fa-bell nav-icon"></i><p>Уведомления</p></a></li>--}}

                <li class="nav-item"><a href="{{route('admin-dashboard')}}" class="nav-link {{ request()->is('admin') ? 'active' : null }}"><i class="fas fa-home nav-icon"></i><p>Главная</p></a></li>

                <li class="nav-item"><a href="{{route('admin-news')}}" class="nav-link {{ request()->is('admin/news*') ? 'active' : null }}"><i class="fas fa-newspaper nav-icon"></i><p>Новости</p></a></li>

{{--                <li class="nav-item">--}}
{{--                    <a href="#" class="nav-link">--}}
{{--                        <i class="fas fa-shopping-bag nav-icon"></i>--}}
{{--                        <p>--}}
{{--                            Магазины--}}
{{--                            <i class="fas fa-angle-left right"></i>--}}
{{--                        </p>--}}
{{--                    </a>--}}
{{--                    <ul class="nav nav-treeview">--}}
{{--                        <li class="nav-item">--}}
{{--                            <a href="#" class="nav-link">--}}
{{--                                <i class="far fa-circle nav-icon"></i>--}}
{{--                                <p>Категории</p>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item">--}}
{{--                            <a href="#" class="nav-link">--}}
{{--                                <i class="far fa-circle nav-icon"></i>--}}
{{--                                <p>Каталог</p>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                </li>--}}

{{--                <li class="nav-item">--}}
{{--                    <a href="#" class="nav-link">--}}
{{--                        <i class="fas fa-utensils nav-icon"></i>--}}
{{--                        <p>--}}
{{--                            Кафе и рестораны--}}
{{--                            <i class="fas fa-angle-left right"></i>--}}
{{--                        </p>--}}
{{--                    </a>--}}
{{--                    <ul class="nav nav-treeview">--}}
{{--                        <li class="nav-item">--}}
{{--                            <a href="#" class="nav-link">--}}
{{--                                <i class="far fa-circle nav-icon"></i>--}}
{{--                                <p>Категории</p>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item">--}}
{{--                            <a href="#" class="nav-link">--}}
{{--                                <i class="far fa-circle nav-icon"></i>--}}
{{--                                <p>Каталог</p>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                </li>--}}

{{--                <li class="nav-item">--}}
{{--                    <a href="#" class="nav-link">--}}
{{--                        <i class="fas fa-icons nav-icon"></i>--}}
{{--                        <p>--}}
{{--                            Сервисы и услуги--}}
{{--                            <i class="fas fa-angle-left right"></i>--}}
{{--                        </p>--}}
{{--                    </a>--}}
{{--                    <ul class="nav nav-treeview">--}}
{{--                        <li class="nav-item">--}}
{{--                            <a href="#" class="nav-link">--}}
{{--                                <i class="far fa-circle nav-icon"></i>--}}
{{--                                <p>Категории</p>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item">--}}
{{--                            <a href="#" class="nav-link">--}}
{{--                                <i class="far fa-circle nav-icon"></i>--}}
{{--                                <p>Каталог</p>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                </li>--}}

{{--                <li class="nav-header">Прочие разделы</li>--}}

{{--                <li class="nav-item">--}}
{{--                    <a href="#" class="nav-link">--}}
{{--                        <i class="fas fa-tools nav-icon"></i>--}}
{{--                        <p>--}}
{{--                            Администратору--}}
{{--                            <i class="fas fa-angle-left right"></i>--}}
{{--                        </p>--}}
{{--                    </a>--}}
{{--                    <ul class="nav nav-treeview">--}}
{{--                        <li class="nav-item">--}}
{{--                            <a href="#" class="nav-link">--}}
{{--                                <i class="far fa-circle nav-icon"></i>--}}
{{--                                <p>Партнёры</p>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item">--}}
{{--                            <a href="#" class="nav-link">--}}
{{--                                <i class="far fa-circle nav-icon"></i>--}}
{{--                                <p>Галерея</p>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item">--}}
{{--                            <a href="#" class="nav-link">--}}
{{--                                <i class="far fa-circle nav-icon"></i>--}}
{{--                                <p>Заявки на аренду</p>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                </li>--}}

            </ul>
        </nav>
    </div>
</aside>
