@extends('layouts.backend')

@section('title', 'Добавление услуги')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                @if(session()->has('crud_success'))
                    <div class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <h5><i class="icon fas fa-check"></i> {{ session('crud_success') }}</h5>
                    </div>
                @endif
                <div class="card card-info">
                    <div class="card-header">
                        <h3 class="card-title">Добавление услуги</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form
                        action="{{ isset($service) ? route('backend.services.update', ['service_id' => $service->id]) : route('backend.services.store') }}"
                        method="POST">
                        @csrf
                        @if(isset($service))
                            @method('patch')
                        @endif
                        <div class="card-body">
                            <div class="row">
                                <div class="col-4">
                                    <div class="form-group">
                                        <label for="name">Название услуги *</label>
                                        <input type="text" name="name"
                                               class="form-control @error('name') is-invalid @enderror" id="surname"
                                               value="{{ $service->name ?? old('name') }}"
                                               placeholder="Введите название услуги">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label> Категория: <span class="text-warning">*</span></label>
                                        <div class="input-group">
                                            <div class="select2-info w-100">
                                                <select name="service_category_id" class="select2"
                                                        id="service_categories"
                                                        data-placeholder="Выберите категорию"
                                                        data-dropdown-css-class="select2-info">
                                                    @foreach($service_categories as $category)
                                                        <option value="{{ $category->id }}"
                                                                @if(isset($service) && $service->service_category_id == $category->id) selected @endif>{{ $category->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <!-- /.input group -->
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label>Краткое описание услуги</label>
                                        <textarea class="form-control" name="description" rows="3"
                                                  placeholder="Краткое описание...">{{ $service->description ?? old('description') }}</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" class="btn btn-info">
                                @if(isset($service))
                                    Сохранить
                                @else
                                    Отправить
                                @endif
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('page-scripts')
    <script type="text/javascript">
        $('#service_categories').select2({
            minimumResultsForSearch: 5
        });
    </script>
@endsection
