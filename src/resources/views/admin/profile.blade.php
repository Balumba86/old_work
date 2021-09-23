@extends('admin.layouts.index')
@section('title-page')Профиль@endsection
@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Профиль администратора</h3>
        </div>
        <div class="card-body">
            <div class="card card-widget widget-user">
                <div class="widget-user-header bg-info">
                    <h3 class="widget-user-username">{{Auth::user()->name}}</h3>
                    <h5 class="widget-user-desc">{{Auth::user()->email}}</h5>
                </div>
                <div class="widget-user-image">
                    <img class="img-circle elevation-2" src="https://ui-avatars.com/api/?name={{Auth::user()->name}}&color=FFF&background=a02c2c" alt="User Avatar">
                </div>
                <div class="card-footer">
                    <div class="row">
                        <div class="col-sm-6 border-right">
                            <div class="description-block">
                                <h5 class="description-header">Создан</h5>
                                <span class="description-text">{{date('d.m.Y H:i', strtotime(Auth::user()->created_at))}}</span>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="description-block">
                                <h5 class="description-header">Изменён</h5>
                                <span class="description-text">{{date('d.m.Y H:i', strtotime(Auth::user()->updated_at))}}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-footer">
            <div class="card-header">
                <h4 class="card-title">Редактирование профиля</h4>
            </div>
            <div class="card-body">
                <form action="{{route('admin-profile-update')}}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="">Имя*</label>
                        <input class="form-control" type="text" placeholder="" name="name" required value="{{Auth::user()->name}}">
                    </div>
                    <div class="form-group">
                        <label for="">E-mail*</label>
                        <input class="form-control" type="email" placeholder="" name="email" required value="{{Auth::user()->email}}">
                    </div>
                    <div class="form-group">
                        <label for="">Новый пароль</label>
                        <input class="form-control" type="password" placeholder="" name="new_password">
                    </div>
                    <div class="form-group">
                        <label for="">Повторите новый пароль</label>
                        <input class="form-control" type="password" placeholder="" name="new_password_repeat">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn bg-gradient-info">Сохранить</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
