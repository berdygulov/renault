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
                                    <label>Имя:*</label>
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
                                    <label>Фамилия:*</label>
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
                                    <label>Телефон:*</label>
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
                                    <label>Марка автомобиля:*</label>
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
                                    <label>Модель:*</label>
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
                                    <label>Дата заявки:*</label>
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
                        </div>
                        <!-- /.form group -->
                        <div class="card-footer">
                            Заявка будет автоматический помещена в очередь после создания!
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
        $(".maskinput").inputmask();

        $('#date_time').datetimepicker({
            locale: 'RU',
            format: 'YYYY-MM-DD HH:mm:ss',
            icons: {
                time: "fa fa-clock",
                date: "fa fa-calendar",
                up: "fa fa-arrow-up",
                down: "fa fa-arrow-down",
            },
        });
    </script>
@endsection

