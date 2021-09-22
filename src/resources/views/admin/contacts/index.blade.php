@extends('admin.layouts.index')
@section('title-page')Контакты@endsection
@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Контакты</h3>
        </div>
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                        <thead>
                        <tr>
                            <th class="text-center">Департамент</th>
                            <th class="text-center">E-mail</th>
                            <th class="text-center">Телефон</th>
                            <th class="text-center">Контактное лицо</th>
                            <th class="text-center">Добавлен</th>
                            <th class="text-center">Изменён</th>
                            <th><a href="{{route('admin-contacts-add')}}" class="btn btn-outline-success btn-sm"><i class="fas fa-plus"></i></a></th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($contacts as $contact)
                        <tr>
                            <td class="text-center">{{$contact->department_name}}</td>
                            <td class="text-center">{{$contact->email}}</td>
                            <td class="text-center">{{$contact->phone}}</td>
                            <td class="text-center">{{$contact->contact_name}}</td>
                            <td class="text-center">{{date('d.m.Y H:i', strtotime($contact->created_at))}}</td>
                            <td class="text-center">{{date('d.m.Y H:i', strtotime($contact->updated_at))}}</td>
                            <td>
                                <a href="{{route('admin-contacts-edit', $contact->id)}}" class="btn btn-outline-warning btn-sm"><i class="fas fa-pencil-alt"></i></a>
                                <span data-target="#drop_post_{{$contact->id}}" data-toggle="modal" class="btn btn-outline-danger btn-sm ml-2"><i class="fas fa-times"></i></span>
                                <form onsubmit="true" action="{{route('admin-contacts-delete', $contact->id)}}" method="post" id="drop-form-{{$contact->id}}">
                                    @method('DELETE')
                                    @csrf
                                    <div class="modal fade" id="drop_post_{{$contact->id}}">
                                        <div class="modal-dialog">
                                            <div class="modal-content bg-danger">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <p>Вы действительно хотите удалить контакт?</p>
                                                    <p class="small">* Данное действие невозможно будет отменить!</p>
                                                </div>
                                                <div class="modal-footer justify-content-between">
                                                    <button type="submit" class="btn btn-outline-light">Удалить</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </td>
                        </tr>
                        @empty
                            <tr><td colspan="5" style="text-align: center">Список пуст</td></tr>
                        @endforelse
                        </tbody>
                    </table>
                </div>
                <div class="card-footer">
                    {{$contacts->links('admin.layouts.paginate')}}
                </div>
    </div>
@endsection
