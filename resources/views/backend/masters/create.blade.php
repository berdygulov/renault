@extends('layouts.backend')

@section('title', 'Добавление мастера')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                @if(session()->has('master_crud_success'))
                    <div class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <h5><i class="icon fas fa-check"></i> {{ session('master_crud_success') }}</h5>
                    </div>
                @endif
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Добавление мастера</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="{{ isset($master) ? route('backend.masters.update', ['master_id' => $master->id]) : route('backend.masters.store') }}" method="POST">
                        @csrf
                        @if(isset($master))
                            @method('patch')
                        @endif
                        <div class="card-body">
                            <div class="row">
                                <div class="col-4">
                                    <div class="form-group">
                                        <label for="surname">Фамилия *</label>
                                        <input type="text" name="surname" class="form-control @error('surname') is-invalid @enderror" id="surname" value="{{ $master->surname ?? old('surname') }}" placeholder="Введите фамилию мастера">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label for="name">Имя *</label>
                                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" value="{{ $master->name ?? old('name') }}" placeholder="Введите имя мастера">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label for="patronymic">Отчество</label>
                                        <input type="text" name="patronymic" class="form-control" id="patronymic" value="{{$master->patronymic ?? old('patronymic') }}" placeholder="Введите отчество мастера">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label for="position">Позиция (должность)</label>
                                        <input type="text" name="position" class="form-control" id="position" value="{{ $master->position ?? old('position') }}" placeholder="Например, механик">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">
                                @if(isset($master))
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
