@extends('layouts.backend')

@section('title', 'Создание заявки')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card card-info">
                    <div class="card-header">
                        <h3 class="card-title">Новая заявка</h3>
                    </div>
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
                                        <input name="client_name" type="text" class="form-control is-invalid"
                                               placeholder="Введите имя">
                                        <span class="error invalid-feedback">Please enter a email address</span>
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
                                        <input name="client_surname" type="text" class="form-control"
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
                                        <input name="client_patronymic " type="text" class="form-control"
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
                                        <input name="client_phone" type="text" class="form-control client-phone"
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
                                        <input name="additional_phone" type="text" class="form-control client-phone"
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
                                        <input name="car_brand" type="text" class="form-control"
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
                                        <input name="car_model" type="text" class="form-control"
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
                                        <input name="car_production_year" type="text" class="form-control maskinput"
                                               data-inputmask="'mask': ['9999']"
                                               data-mask="" inputmode="text">
                                    </div>
                                    <!-- /.input group -->
                                </div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <!-- Car viin -->
                                <div class="form-group">
                                    <label> VIIN номер (не обязательно):</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-car"></i></span>
                                        </div>
                                        <input name="car_vin_number" type="text" class="form-control"
                                               placeholder="Введите VIIN номер автомобиля">
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
                                        <input name="date_time" type="text" class="form-control datetimepicker-input"
                                               data-target="#date_time" placeholder="Выберите дату"/>
                                    </div>
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
                                        <input name="approximate_duration" type="text" class="form-control"
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
                                            <span class="input-group-text"><i class="fas fa-clock"></i></span>
                                        </div>
                                        <input name="description" type="text" class="form-control"
                                               placeholder="Введите описание">
                                    </div>
                                    <!-- /.input group -->
                                </div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <!-- Services -->
                                <div class="form-group">
                                    <label> Услуги: <span class="text-warning">*</span></label>
                                    <div class="input-group">
                                        <div class="select2-info w-100">
                                            <select class="select2" id="services"
                                                    data-placeholder="Выберите услуги"
                                                    data-dropdown-css-class="select2-info"
                                                    name="services[]" multiple="multiple">
                                                @foreach($services as $service)
                                                    <option value="{{ $service->id }}">{{ $service->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <!-- /.input group -->
                                </div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <!-- Services -->
                                <div class="form-group">
                                    <label> Мастера: <span class="text-warning">*</span></label>
                                    <div class="input-group">
                                        <div class="select2-info w-100">
                                            <select class="select2" id="masters" name="master_id"
                                                    data-placeholder="Выберите мастера"
                                                    data-dropdown-css-class="select2-info">
                                                <option value="AL">Alabama</option>
                                                <option value="WY">Wyoming</option>
                                            </select>
                                        </div>
                                    </div>
                                    <!-- /.input group -->
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="d-flex justify-content-end">
                                    <button style="max-width: max-content;" type="button"
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
                </div>
            </div>
        </div>
    </div>
@endsection

@section('page-scripts')
    <script type="text/javascript">
		$('#services').select2();

		$('#masters').select2();

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

