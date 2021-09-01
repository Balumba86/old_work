<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="{{route('admin-dashboard')}}" class="brand-link">
        <img src="/favicon.ico" alt="{{ config('app.name', 'Laravel') }}" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">{{ config('app.name', 'Laravel') }}</span>
    </a>
    <div class="sidebar">
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                <li class="nav-item"><a href="{{route('admin-dashboard')}}" class="nav-link {{ request()->is('admin') ? 'active' : null }}"><i class="fas fa-home nav-icon"></i><p>Главная</p></a></li>

                <li class="nav-item"><a href="{{route('admin-news')}}" class="nav-link {{ request()->is('admin/news*') ? 'active' : null }}"><i class="fas fa-newspaper nav-icon"></i><p>Новости</p></a></li>

                <li class="nav-item {{ request()->is('admin/shop-category*') || request()->is('admin/shops*') ? 'menu-open' : null }}">
                    <a href="#" class="nav-link">
                        <i class="fas fa-shopping-bag nav-icon"></i>
                        <p>
                            Магазины
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('admin-shop-category')}}" class="nav-link {{ request()->is('admin/shop-category*') ? 'active' : null }}">
                                <i class="fas fa-angle-right nav-icon"></i>
                                <p>Категории</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('admin-shop')}}" class="nav-link {{ request()->is('admin/shops*') ? 'active' : null }}">
                                <i class="fas fa-angle-right nav-icon"></i>
                                <p>Каталог</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item {{ request()->is('admin/restaurant-category*') || request()->is('admin/restaurants*') ? 'menu-open' : null }}">
                    <a href="#" class="nav-link">
                        <i class="fas fa-utensils nav-icon"></i>
                        <p>
                            Кафе и рестораны
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('admin-restaurant-category')}}" class="nav-link {{ request()->is('admin/restaurant-category*') ? 'active' : null }}">
                                <i class="fas fa-angle-right nav-icon"></i>
                                <p>Категории</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('admin-restaurant')}}" class="nav-link {{ request()->is('admin/restaurants*') ? 'active' : null }}">
                                <i class="fas fa-angle-right nav-icon"></i>
                                <p>Каталог</p>
                            </a>
                        </li>
                    </ul>
                </li>

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
