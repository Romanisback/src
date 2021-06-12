@extends('admin.layouts.app')
@section('title', 'Case create')

@section('content')
    <header class="page-header">
        <h2>Case / Create</h2>
    </header>

    @include('admin.components._alert_messages')

    <div class="row">
        <div class="col-md-12">
            <form class="" action="{{ route('admin.cases.create') }}" enctype="multipart/form-data" method="post">
                @csrf
                <div class="row">
                    <div class="col-md-8">
                        <section class="panel panel-dark">
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="title" class="control-label">Название</label>
                                            <input type="text" id="title" name="title" value="{{ old('title') }}" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="description" class="control-label">Описание</label>
                                            <textarea name="description"
                                                      id="description"
                                                      class="form-control description" rows="5">{{ old('description') }}</textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="gained_result" class="control-label">Просмотры</label>
                                            <input type="text" id="gained_result" name="gained_result" value="{{ old('gained_result') }}" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>

                    <div class="col-md-4">
                        <section class="panel panel-dark">
                            <div class="panel-body">
                                <div class="row">

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="control-label">Изображение</label>
                                            <div class="fileupload fileupload-new" data-provides="fileupload">
                                                <div class="input-append">
                                                    <div class="uneditable-input">
                                                        <i class="fa fa-file fileupload-exists"></i>
                                                        <span class="fileupload-preview"></span>
                                                    </div>
                                                    <span class="btn btn-default btn-file">
                                                            <span class="fileupload-exists">Изменить</span>
                                                            <span class="fileupload-new">Выбрать файл</span>
                                                            <input type="file" name="image"/>
                                                        </span>
                                                    <a href="#" class="btn btn-default fileupload-exists" data-dismiss="fileupload">Удалить</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="control-label">Логотип</label>
                                            <div class="fileupload fileupload-new" data-provides="fileupload">
                                                <div class="input-append">
                                                    <div class="uneditable-input">
                                                        <i class="fa fa-file fileupload-exists"></i>
                                                        <span class="fileupload-preview"></span>
                                                    </div>
                                                    <span class="btn btn-default btn-file">
                                                            <span class="fileupload-exists">Изменить</span>
                                                            <span class="fileupload-new">Выбрать файл</span>
                                                            <input type="file" name="logo"/>
                                                        </span>
                                                    <a href="#" class="btn btn-default fileupload-exists" data-dismiss="fileupload">Удалить</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>

                <footer class="panel-footer">
                    <div class="row">
                        <div class="col-md-6">
                            <a href="{{ route('admin.cases.list') }}" class="btn btn-primary"><i class="fa fa-arrow-circle-left" aria-hidden="true"></i> Назад</a>
                            <button class="btn btn-success"><i class="fa fa-save" aria-hidden="true"></i> Сохранить</button>
                        </div>
                    </div>
                </footer>
            </form>
        </div>
    </div>


@endsection

@push('scripts')

@endpush