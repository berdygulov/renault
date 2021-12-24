@extends('layouts.backend')

@section('title', 'Создание заявки')

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
                        <h3 class="card-title">Новая заявка</h3>
                    </div>
                    <form method="POST" action="{{ route('backend.applications.store') }}">
                        @csrf
                        @method('POST')
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12 col-lg-6">
                                    <!-- Date and time -->
                                    <div class="form-group">
                                        <label>Имя: <span class="text-warning">*</span></label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="fas fa-user"><div></div></i>
                                            </span>
                                            </div>
                                            <input name="client_name" type="text" value="{{ old('client_name') }}"
                                                   class="@error('client_name') is-invalid @enderror form-control"
                                                   placeholder="Введите имя">
                                            {{--                                            <span class="error invalid-feedback">Please enter a email address</span>--}}
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6">
                                    <!-- Date and time -->
                                    <div class="form-group">
                                        <label>Фамилия: <span class="text-warning">*</span></label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="fas fa-user"><div></div></i>
                                            </span>
                                            </div>
                                            <input name="client_surname" type="text" value="{{ old('client_surname') }}"
                                                   class="@error('client_surname') is-invalid @enderror form-control"
                                                   placeholder="Введите фамилию">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6">
                                    <!-- Date and time -->
                                    <div class="form-group">
                                        <label>Отчество (не обязательно):</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="fas fa-user"><div></div></i>
                                            </span>
                                            </div>
                                            <input name="client_patronymic" type="text"
                                                   value="{{ old('client_patronymic') }}"
                                                   class="@error('client_patronymic') is-invalid @enderror form-control"
                                                   placeholder="Введите отчество">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6">
                                    <!-- Phone number -->
                                    <div class="form-group">
                                        <label>Телефон: <span class="text-warning">*</span></label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                            </div>
                                            <input name="client_phone" type="text" value="{{ old('client_phone') }}"
                                                   class="@error('client_phone') is-invalid @enderror form-control maskinput"
                                                   data-inputmask="'mask': ['9(999) 999-9999']"
                                                   data-mask="" inputmode="text">
                                        </div>
                                        <!-- /.input group -->
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6">
                                    <!-- Phone number -->
                                    <div class="form-group">
                                        <label>Доп. телефон (не обязательно):</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                            </div>
                                            <input name="additional_phone" type="text"
                                                   value="{{ old('additional_phone') }}"
                                                   class="@error('additional_phone') is-invalid @enderror form-control maskinput"
                                                   data-inputmask="'mask': ['9(999) 999-9999']"
                                                   data-mask="" inputmode="text">
                                        </div>
                                        <!-- /.input group -->
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6">
                                    <!-- Car brand and time -->
                                    <div class="form-group">
                                        <label>Марка автомобиля: <span class="text-warning">*</span></label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="fas fa-car"><div></div></i>
                                            </span>
                                            </div>
                                            <input name="car_brand" type="text" value="{{ old('car_brand') }}"
                                                   class="@error('car_brand') is-invalid @enderror form-control"
                                                   placeholder="Введите марку автомобиля">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6">
                                    <!-- Car model and time -->
                                    <div class="form-group">
                                        <label>Модель: <span class="text-warning">*</span></label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="fas fa-car"><div></div></i>
                                            </span>
                                            </div>
                                            <input name="car_model" type="text" value="{{ old('car_model') }}"
                                                   class="@error('car_model') is-invalid @enderror form-control"
                                                   placeholder="Введите модель автомобиля">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6">
                                    <!-- Car production year -->
                                    <div class="form-group">
                                        <label> Год производста автомобиля (не обязательно):</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-car"></i></span>
                                            </div>
                                            <input name="car_production_year" type="text"
                                                   value="{{ old('car_production_year') }}"
                                                   class="@error('car_production_year') is-invalid @enderror form-control maskinput"
                                                   data-inputmask="'mask': ['9999']"
                                                   data-mask="" inputmode="text">
                                        </div>
                                        <!-- /.input group -->
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6">
                                    <!-- Car vin -->
                                    <div class="form-group">
                                        <label> VIN номер (не обязательно):</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-car"></i></span>
                                            </div>
                                            <input name="car_vin_number" type="text" value="{{ old('car_vin_number') }}"
                                                   class="@error('car_vin_number') is-invalid @enderror form-control"
                                                   placeholder="Введите VIN номер автомобиля">
                                        </div>
                                        <!-- /.input group -->
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6">
                                    <!-- Date and time -->
                                    <div class="form-group">
                                        <label>Дата заявки: <span class="text-warning">*</span></label>
                                        <div class="input-group date" id="date_time" data-target-input="nearest">
                                            <div class="input-group-prepend" data-target="#date_time"
                                                 data-toggle="datetimepicker">
                                                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                            </div>
                                            <input name="date_time" type="text" value="{{ old('date_time') }}"
                                                   class="@error('date_time') is-invalid @enderror form-control datetimepicker-input"
                                                   data-target="#date_time" placeholder="Выберите дату"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6">
                                    <!-- Services -->
                                    <div class="form-group">
                                        <label> Услуги: <span class="text-warning">*</span></label>
                                        <div class="input-group">
                                            <div class="select2-info w-100">
                                                <select class="select2"
                                                        id="services"
                                                        data-placeholder="Выберите услуги"
                                                        data-dropdown-css-class="select2-info"
                                                        name="services[]" multiple="multiple">
                                                    @foreach($service_categories as $service_category)
                                                        <option
                                                                value="null" disabled>{{ $service_category->name }}
                                                        </option>
                                                        @foreach($service_category->services as $service)
                                                            <option
                                                                    value="{{ $service->id }}">{{ $service->name }}
                                                            </option>
                                                        @endforeach
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <!-- /.input group -->
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6">
                                    <!-- Masters -->
                                    <div class="form-group">
                                        <label> Мастера: <span class="text-warning">*</span></label>
                                        <div class="input-group">
                                            <div class="select2-info w-100">
                                                <select class="select2"
                                                        id="masters" name="master_id"
                                                        data-placeholder="Выберите мастера">
                                                    <option value="" selected>Выберите мастера</option>
                                                    @foreach($masters as $master)
                                                        <option
                                                                value="{{ $master->id }}">{{ $master->name . ' ' .  $master->surname .  ' (' . $master->position . ')'}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <!-- /.input group -->
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6">
                                    <!-- Approximate duration -->
                                    <div class="form-group">
                                        <label> Примерная продолжительность(часы) (не обязательно):</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-clock"></i></span>
                                            </div>
                                            <input name="approximate_duration" type="text"
                                                   value="{{ old('approximate_duration') }}"
                                                   class="@error('approximate_duration') is-invalid @enderror form-control"
                                                   placeholder="Введите продолжительность">
                                        </div>
                                        <!-- /.input group -->
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6">
                                    <!-- Description -->
                                    <div class="form-group">
                                        <label> Описание (не обязательно):</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-file"></i></span>
                                            </div>
                                            <input name="description" type="text" value="{{ old('description') }}"
                                                   class="@error('description') is-invalid @enderror form-control"
                                                   placeholder="Введите описание">
                                        </div>
                                        <!-- /.input group -->
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="d-flex justify-content-end">
                                        <button style="max-width: max-content;" type="input"
                                                class="btn btn-block btn-info btn-md mb-3">Создать
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <!-- /.form group -->
                            <div class="card-footer">
                                <span
                                        class="text-muted">Заявка будет автоматический помещена в очередь после создания!</span>
                            </div>
                            <!-- /.card-body -->
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('page-scripts')
    <script type="text/javascript">
		$('#services').select2();

		$('#masters').select2({
			language: 'ru'
		});

		$(".maskinput").inputmask();

		$('#date_time').datetimepicker({
			locale: 'RU',
			format: 'YYYY-MM-DD HH:mm:ss',
			icons: {
				time: "fa fa-clock",
			},
		});
    </script>
@endsection

