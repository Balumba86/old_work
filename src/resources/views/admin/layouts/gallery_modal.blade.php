<div class="modal fade" id="gallery">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Галерея</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card card-success card-outline card-tabs">
                    <div class="card-header p-0 pt-1">
                        <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
                            @if(isset($entity_id))
                            <li class="nav-item">
                                <a class="nav-link active" id="custom-tabs-one-home-tab" data-toggle="pill" href="#tab-list" role="tab" aria-controls="custom-tabs-one-home" aria-selected="true">Загруженное</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="custom-tabs-one-profile-tab" data-toggle="pill" href="#tab-load" role="tab" aria-controls="custom-tabs-one-profile" aria-selected="false">Добавить</a>
                            </li>
                            @else
                                <li class="nav-item active">
                                    <a class="nav-link" id="custom-tabs-one-profile-tab" data-toggle="pill" href="#tab-load" role="tab" aria-controls="custom-tabs-one-profile" aria-selected="false">Добавить</a>
                                </li>
                            @endif
                        </ul>
                    </div>
                    <div class="card-body">
                        <div class="tab-content" id="custom-tabs-one-tabContent">
                            @if(isset($entity_id))
                            <div class="tab-pane fade show active" id="tab-list" role="tabpanel" aria-labelledby="custom-tabs-one-home-tab">
                                <div id="loaded_files_block" class="row">

                                </div>
                            </div>
                            <div class="tab-pane fade" id="tab-load" role="tabpanel" aria-labelledby="custom-tabs-one-profile-tab">
                                <p class="text-red">Размеры изображений для галлереи должны быть 1024x768 пикселей<br />
                                    Формат файла для галлереи должен быть jpeg, jpg или png
                                </p>
                                <div id="add_files_block">
                                    <div class="custom-file" id="gallery_add">
                                        <input type="file" accept="image/jpeg,image/png,image/jpg" class="custom-file-input" id="gallery" multiple name="images[]">
                                        <label class="custom-file-label" for="gallery">Выбрать файлы</label>
                                    </div>
                                </div>
                            </div>
                            @else
                            <div class="tab-pane fade show active" id="tab-load" role="tabpanel" aria-labelledby="custom-tabs-one-profile-tab">
                                <div id="add_files_block">
                                    <div class="custom-file" id="gallery_add">
                                        <input type="file" accept="image/jpeg,image/png,image/jpg" class="custom-file-input" id="gallery" multiple name="images[]">
                                        <label class="custom-file-label" for="gallery">Выбрать файлы</label>
                                    </div>
                                </div>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
                <div class="btn-group">
                    <button type="button" class="btn btn-success" data-dismiss="modal">Применить</button>
                </div>

            </div>
        </div>
    </div>
</div>
@push('styles')
    <style>
        .gallery_item {
            width: 100%;
            position: relative;
            margin-top: 5px;
        }
        .gallery_item img {
            width: 100%;
            border-radius: 4px;
        }
        .gallery_item span {
            display: flex;
            flex-direction: row;
            align-items: center;
            align-content: center;
            width: 20px;
            height: 20px;
            background: #000;
            border-radius: 50%;
            position: absolute;
            right: 5px;
            top: 5px;
            cursor: pointer;
            color: white;
        }
        .gallery_item span i {
            margin-left: 4px;
        }
    </style>
@endpush
@push('scripts')
<script>
    var entity_id = {{$entity_id ?? 0}};
    var entity_type = "{{$type ?? ''}}";
    var loaded_block = $('#loaded_files_block');

    if(entity_id !== 0){
        getImages(entity_id, entity_type);
    }
    function getImages(entity_id, type)
    {
        $.post(
            "/api/v1/system/gallery",
            {
                action: "get",
                type: type,
                id: entity_id
            },
            getImagesSuccess
        );
    }
    function deleteImage(entity_id, type, image_id)
    {
        $.post(
            "/api/v1/system/gallery",
            {
                action: "delete",
                type: type,
                id: entity_id,
                image_id: image_id
            },
            function (data) {
                if (data.result) {
                    loaded_block.html('')
                    getImages(entity_id, entity_type);
                }
            }
        );
    }
    function getImagesSuccess(data)
    {
        if (data.type === 'success') {
            data.data.map(item => {
                loaded_block.append('<div class="col col-3" id="image__'+item.image_id+'"><div class="gallery_item" data-id="' + item.image_id + '"><img src="' + item.path + '" alt=""><span class="remove-image" onclick="removeImage('+item.image_id+')"><i class="fas fa-times"></i></span></div></div>')
            })
        }
    }
    function removeImage(id) {
        deleteImage(entity_id, entity_type, id)
    }
</script>
@endpush
