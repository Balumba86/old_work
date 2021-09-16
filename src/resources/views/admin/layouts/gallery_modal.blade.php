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
                            <li class="nav-item">
                                <a class="nav-link active" id="custom-tabs-one-home-tab" data-toggle="pill" href="#tab-list" role="tab" aria-controls="custom-tabs-one-home" aria-selected="true">Загруженное</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="custom-tabs-one-profile-tab" data-toggle="pill" href="#tab-load" role="tab" aria-controls="custom-tabs-one-profile" aria-selected="false">Добавить ещё</a>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <div class="tab-content" id="custom-tabs-one-tabContent">
                            <div class="tab-pane fade show active" id="tab-list" role="tabpanel" aria-labelledby="custom-tabs-one-home-tab">
                                <div id="loaded_files_block" class="row">

                                </div>
                            </div>
                            <div class="tab-pane fade" id="tab-load" role="tabpanel" aria-labelledby="custom-tabs-one-profile-tab">
                                <div id="add_files_block">
                                    <div class="custom-file" id="gallery_add">
                                        <input type="file" accept="image/jpeg,image/png,image/jpg" class="custom-file-input" id="gallery" multiple name="images[]">
                                        <label class="custom-file-label" for="gallery">Выбрать файлы</label>
                                    </div>
                                    <div class="form-group mt-3" id="template_result" style="display: none">
                                        <span>Прогресс загрузки</span>
                                        <div class="progress progress-sm">
                                            <div id="progress-file" class="progress-bar bg-success progress-file" role="progressbar" style="width: 0%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <button type="button" class="btn btn-primary" id="send-files" style="display: none">Загрузить</button>
                                    </div>
                                </div>

                            </div>
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
