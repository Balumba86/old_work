@extends('admin.layouts.index')
@section('title-page')Вакансии@endsection
@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Вакансии</h3>
        </div>
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                        <thead>
                        <tr>
                            <th class="text-center">Заголовок</th>
                            <th class="text-center">Добавлена</th>
                            <th class="text-center">Обновлена</th>
                            <th><a href="{{route('admin-jobs-add')}}" class="btn btn-outline-success btn-sm"><i class="fas fa-plus"></i></a></th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($jobs as $job)
                        <tr>
                            <td class="text-center">{{$job->title}}</td>
                            <td class="text-center">{{date('d.m.Y H:i', strtotime($job->created_at))}}</td>
                            <td class="text-center">{{date('d.m.Y H:i', strtotime($job->updated_at))}}</td>
                            <td>
                                <a href="{{route('admin-jobs-edit', $job->id)}}" class="btn btn-outline-warning btn-sm"><i class="fas fa-pencil-alt"></i></a>
                                <span data-target="#drop_post_{{$job->id}}" data-toggle="modal" class="btn btn-outline-danger btn-sm ml-2"><i class="fas fa-times"></i></span>
                                <form onsubmit="true" action="{{route('admin-jobs-delete', $job->id)}}" method="post" id="drop-form-{{$job->id}}">
                                    @method('DELETE')
                                    @csrf
                                    <div class="modal fade" id="drop_post_{{$job->id}}">
                                        <div class="modal-dialog">
                                            <div class="modal-content bg-danger">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <p>Вы действительно хотите удалить вакансию "{{$job->title}}"?</p>
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
                    {{$jobs->links('admin.layouts.paginate')}}
                </div>
    </div>
@endsection
