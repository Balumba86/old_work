@extends('admin.layouts.index')
@section('title-page')Рассылка {{ $sender->subject }}@endsection
@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Рассылка {{ $sender->subject }}</h3>
        </div>
        <div class="card-body">
            <p>{!! $sender->text !!}</p>
        </div>
        <div class="card-footer">
            <a href="{{ url()->previous() }}" class="btn bg-gradient-warning">Назад</a>
        </div>
    </div>
@endsection
