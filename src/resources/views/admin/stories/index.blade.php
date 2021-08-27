@extends('admin.layouts.index')
@section('title-page')Сториз@endsection
@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Сториз</h3>
        </div>

        <div class="card-body table-responsive p-0">
            <table class="table table-striped table-valign-middle">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Заголовок</th>
                    <th><a href="{{route('admin-stories-add')}}" class="btn rounded-circle bg-gradient-info"><i class="fas fa-plus"></i></a></th>
                </tr>
                </thead>
                <tbody>
                @forelse($stories as $story)
                    <tr>
                        <td>{{$story->id}}</td>
                        <td>
                            <img src="{{Storage::url($story->preview_img)}}" alt="" class="img-size-32 mr-2" data-toggle="modal" data-target="#preview-img-{{$story->id}}">
                            {{$story->preview_title}}

                            <div class="modal fade" id="preview-img-{{$story->id}}">
                                <div class="modal-dialog modal-sm">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <img src="{{Storage::url($story->preview_img)}}" style="width: 100%">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td>
                            <a href="{{route('admin-stories-edit', $story->id)}}" class="btn-dark btn">
                                <i class="fas fa-edit"></i>
                            </a>

                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#story-add-{{$story->id}}">
                                <i class="fas fa-plus"></i>
                            </button>

                            <button type="button"
                                    class="btn btn-warning toggle-story-activity"
                                    data-url="{{ route('admin-stories-activity', ['story' => $story->id]) }}"
                                    data-active="{{ $story->is_active }}">
                                @if($story->is_active)
                                    <i class="fas fa-toggle-on"></i>
                                @else
                                    <i class="fas fa-toggle-off"></i>
                                @endif
                            </button>

                            <div class="modal fade" id="story-add-{{$story->id}}">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title">Добавление элемента</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <form action="{{route('admin-stories-add-item')}}" method="post" enctype="multipart/form-data">
                                            @csrf
                                            <input type="hidden" name="story_id" value="{{$story->id}}">
                                            <div class="modal-body">
                                                <div class="form-group">
                                                    <label>Заголовок</label>
                                                    <input type="text" class="form-control" name="title" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="">Дата</label>
                                                    <input class="form-control" type="datetime-local" placeholder="" name="date" value="" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="">Картинка (720x1280 | jpg, jpeg, png)</label>
                                                    <input class="form-control" type="file" placeholder="" name="image" required>
                                                </div>
                                                <div class="form-group">
                                                    <label>Описание</label>
                                                    <textarea name="description" cols="30" rows="2" class="form-control" required></textarea>
                                                </div>
                                                <h4>Диплинк</h4>
                                                <h6><i>Используется в приложении для перехода</i></h6>
                                                <div class="form-group">
                                                    <label>Ссылка для кнопки</label>
                                                    <input type="text" class="form-control" name="link" value="dialog://stories" required>
                                                </div>
                                                <div class="form-group">
                                                    <label>Action name</label>
                                                    <input type="text" class="form-control" name="action_name" value="Открыть" required>
                                                </div>
                                                <div class="form-group">
                                                    <label>Тип кнопки</label>
                                                    <select class="form-control" name="button_type" value="rounded" required>
                                                        <option value="rounded">С заливкой</option>
                                                        <option value="roundedOutline">Без заливки</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <div class="custom-control custom-switch">
                                                        <input type="hidden" name="root" value="false">
                                                        <input type="checkbox" checked class="custom-control-input" id="root-param-{{$story->id}}" name="root" value="true">
                                                        <label class="custom-control-label" for="root-param-{{$story->id}}">Root</label>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="custom-control custom-switch">
                                                        <input type="hidden" name="is_active" value="false">
                                                        <input type="checkbox" checked class="custom-control-input" id="active-param-{{$story->id}}" name="is_active" value="true">
                                                        <label class="custom-control-label" for="active-param-{{$story->id}}">Активность</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer justify-content-between">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
                                                <button type="submit" class="btn btn-primary">Сохранить</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#story-view-{{$story->id}}">
                                <i class="fas fa-eye"></i>
                            </button>
                            <div class="modal fade" id="story-view-{{$story->id}}">
                                <div class="modal-dialog modal-xl">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title">Просмотр</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                @foreach($story->storyItems as $story_item)
                                                <div class="col-lg">
                                                    <p><img src="{{Storage::url($story_item->image)}}" alt="" style="max-height: 300px"></p>
                                                    <p>{{$story_item->date}}</p>
                                                    <p>{{$story_item->description}}</p>
                                                    <p>{{$story_item->link}}</p>
                                                    <p>{{$story_item->action_name}}</p>
                                                    <p>{{$story_item->button_type}}</p>
                                                    <p>
                                                        <button type="button"
                                                               class="btn btn-warning toggle-story-activity"
                                                               data-url="{{ route('admin-story-items-activity', ['item' => $story_item->id]) }}"
                                                               data-active="{{ $story_item->is_active }}">
                                                            @if($story_item->is_active)
                                                                <i class="fas fa-toggle-on"></i>
                                                            @else
                                                                <i class="fas fa-toggle-off"></i>
                                                            @endif
                                                        </button>
                                                    </p>
                                                </div>
                                                @endforeach
                                            </div>
                                        </div>
                                        <div class="modal-footer justify-content-between">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#story-del-{{$story->id}}">
                                <i class="fas fa-trash"></i>
                            </button>
                            <div class="modal fade" id="story-del-{{$story->id}}">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title">Внимание!</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <form action="{{route('admin-stories-delete', $story->id)}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <div class="modal-body">
                                                <p>Вы действительно хотите удалить историю?</p>
                                                <p class="small">Вместе с историей будут удалены все её слайды</p>
                                            </div>
                                            <div class="modal-footer justify-content-between">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
                                                <button type="submit" class="btn btn-danger">Удалить</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr><td colspan="5" style="text-align: center">Ничего нет</td></tr>
                @endforelse

                </tbody>
            </table>
        </div>
    </div>
    <div class="card-footer">
        {{$stories->links('admin.layouts.paginate')}}
    </div>
@endsection

@section('custom_scripts')
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $(document).ready(function() {
           $('.toggle-story-activity').click(function(e) {
               e.preventDefault();
               let self = $(this);
               let url = $(self).data('url'),
                   new_state = parseInt($(self).data('active')) === 1 ? 0 : 1;

               $.post(url, {'is_active': new_state}, function( data ) {
                   let btn = self.find('.fas');

                   if(data.is_active === "1") {
                       btn.addClass('fa-toggle-on').removeClass('fa-toggle-off');
                   } else {
                       btn.removeClass('fa-toggle-on').addClass('fa-toggle-off');
                   }

                   $(self).data('active', data.is_active);
               });

               return false;
           });
        });
    </script>
@endsection
