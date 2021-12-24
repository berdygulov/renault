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
                        action="{{ isset($service_category) ? route('backend.service_categories.update', ['service_category_id' => $service_category->id]) : route('backend.service_categories.store') }}"
                        method="POST">
                        @csrf
                        @if(isset($service_category))
                            @method('patch')
                        @endif
                        <div class="card-body">
                            <div class="row">
                                <div class="col-4">
                                    <div class="form-group">
                                        <label for="name">Название категории *</label>
                                        <input type="text" name="name"
                                               class="form-control @error('name') is-invalid @enderror" id="surname"
                                               value="{{ $service_category->name ?? old('name') }}"
                                               placeholder="Введите название услуги">
                                    </div>
                                </div>
                                <div class="col-8">
                                    <div class="form-group">
                                        <label>Краткое описание категории услуги</label>
                                        <textarea class="form-control" name="description" rows="3"
                                                  placeholder="Краткое описание...">{{ $service_category->description ?? old('description') }}</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" class="btn btn-info">
                                @if(isset($service_category))
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
        $('#service_category_categories').select2({
            minimumResultsForSearch: 5
        });
    </script>
@endsection
