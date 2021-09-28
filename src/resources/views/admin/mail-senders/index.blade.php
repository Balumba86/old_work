@extends('admin.layouts.index')
@section('title-page')E-mail рассылки@endsection
@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">E-mail рассылки</h3>
        </div>
        <div class="card-body table-responsive p-0">
            <table class="table table-hover text-nowrap">
                <thead>
                <tr>
                    <th class="text-center">Тема</th>
                    <th class="text-center">Создана</th>
                    <th><a href="{{route('admin-email-sender-add')}}" class="btn btn-outline-success btn-sm"><i class="fas fa-plus"></i></a></th>
                </tr>
                </thead>
                <tbody>
                @forelse($senders as $sender)
                <tr>
                    <td class="text-center">{{$sender->subject}}</td>
                    <td class="text-center">{{date('d.m.Y H:i', strtotime($sender->created_at))}}</td>
                    <td>
                        <a href="{{route('admin-email-sender-view', $sender->id)}}" class="btn btn-outline-warning btn-sm"><i class="fas fa-eye"></i></a>
                    </td>
                </tr>
                @empty
                    <tr><td colspan="3" style="text-align: center">Рассылок нет</td></tr>
                @endforelse
                </tbody>
            </table>
        </div>
        <div class="card-footer">
            {{$senders->links('admin.layouts.paginate')}}
        </div>
    </div>
@endsection
