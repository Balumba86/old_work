<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="#" class="brand-link">
        <span class="brand-text font-weight-light">Ms Api</span>
    </a>
    <div class="sidebar">
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item"><a href="{{route('dashboard')}}" class="nav-link {{ request()->is('admin') ? 'active' : null }}"><i class="fas fa-home nav-icon"></i><p>Главная</p></a></li>
                <li class="nav-item"><a href="{{route('admin-category')}}" class="nav-link {{ request()->is('admin/category*') ? 'active' : null }}"><i class="fas fa-list-ul nav-icon"></i><p>Категории услуг/товаров</p></a></li>
                <li class="nav-item"><a href="{{route('admin-products')}}" class="nav-link {{ request()->is('admin/product*') ? 'active' : null }}"><i class="fas fa-chess-bishop nav-icon"></i><p>Товары</p></a></li>
                <li class="nav-item"><a href="{{route('admin-points')}}" class="nav-link {{ request()->is('admin/points*') ? 'active' : null }}"><i class="fas fa-map-marker-alt nav-icon"></i><p>Пункты приёма</p></a></li>
                <li class="nav-item"><a href="{{route('admin-services')}}" class="nav-link {{ request()->is('admin/services*') ? 'active' : null }}"><i class="fas fa-taxi nav-icon"></i><p>Услуги</p></a></li>
                <li class="nav-item"><a href="{{route('admin-stipulations')}}" class="nav-link {{ request()->is('admin/stipulations*') ? 'active' : null }}"><i class="fas fa-check-square nav-icon"></i><p>Условия логистических сервисов</p></a></li>
                <li class="nav-item"><a href="{{route('admin-fast-services')}}" class="nav-link {{ request()->is('admin/fast_services*') ? 'active' : null }}"><i class="fas fa-truck nav-icon"></i><p>Логистические сервисы</p></a></li>
                <li class="nav-item"><a href="{{route('admin-requests')}}" class="nav-link {{ request()->is('admin/requests*') ? 'active' : null }}"><i class="fas fa-bullhorn nav-icon"></i><p>Заявки</p></a></li>
                <li class="nav-item"><a href="{{route('admin-orders')}}" class="nav-link {{ request()->is('admin/orders*') ? 'active' : null }}"><i class="fas fa-shopping-bag nav-icon"></i><p>Заказы</p></a></li>
                <li class="nav-item"><a href="{{route('admin-clients')}}" class="nav-link {{ request()->is('admin/clients*') ? 'active' : null }}"><i class="fas fa-user-alt nav-icon"></i><p>Клиенты</p></a></li>
                <li class="nav-item"><a href="{{route('admin-stories')}}" class="nav-link {{ request()->is('admin/stories*') ? 'active' : null }}"><i class="fas fa-images nav-icon"></i><p>Сториз</p></a></li>
                <li class="nav-item"><a href="{{route('admin-payments')}}" class="nav-link {{ request()->is('admin/payments*') ? 'active' : null }}"><i class="fas fa-ruble-sign nav-icon"></i><p>Оплаты</p></a></li>
                <li class="nav-item"><a href="{{route('admin-notifications')}}" class="nav-link {{ request()->is('admin/notifications*') ? 'active' : null }}"><i class="fas fa-bell nav-icon"></i><p>Уведомления</p></a></li>
            </ul>
        </nav>
    </div>
</aside>
