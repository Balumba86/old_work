@extends('admin.layouts.index')
@section('title-page')Планы уровней@endsection
@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Планы уровней</h3>
    </div>
    <div class="card-body p-0">
        <div class="custom-file mb-3" id="gallery_add">
            <input type="file" accept="image/jpeg,image/png,image/jpg" class="custom-file-input" id="upload_plan">
            <label class="custom-file-label" for="gallery">Выбрать файл</label>
        </div>
        <div class="row" id="loaded_files_block">

        </div>
    </div>
    <div class="card-footer">
        <form action="{{route('admin-plans-create')}}" method="post">
            @csrf
            <input type="hidden" name="type" value="plan">
            <button type="submit" class="btn bg-gradient-info" disabled>Создать архив для скачивания</button>
        </form>
    </div>
</div>
@endsection
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
        }
        .gallery_item span i {
            margin-left: 4px;
        }
    </style>
@endpush
@push('scripts')
    <script>
        var entity_id = 0;
        var entity_type = "plan";
        var loaded_block = $('#loaded_files_block');

        getImages(entity_id, entity_type);

        function getImages(entity_id, type)
        {
            loaded_block.html('');
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
                    loaded_block.append('<div class="col col-2" id="image__'+item.image_id+'"><div class="gallery_item" data-id="' + item.image_id + '"><img src="' + item.path + '" alt=""><span class="remove-image" onclick="removeImage('+item.image_id+')"><i class="fas fa-times"></i></span></div></div>')
                })
            }
        }
        function removeImage(id) {
            deleteImage(entity_id, entity_type, id)
        }

        $('#upload_plan').on('change', function (e) {
            e.stopPropagation();
            e.preventDefault();
            var input = $(e.target);
            var file = input[0].files[0];
            var xhr = new XMLHttpRequest();
            var data = new FormData();
            data.append('type', entity_type);
            data.append('image', file);
            xhr.onload = xhr.onerror = function() {
                if (this.status === 200) {
                    getImages(entity_id, entity_type);
                }
            };
            xhr.open("POST", "/api/v1/system/upload", true);
            xhr.send(data);
        });
    </script>
@endpush
