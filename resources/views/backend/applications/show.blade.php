@extends('layouts.backend')

@section('title', 'Заявка' . ' № ' . $application->id)

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div
                    class="card @if($application->status == 'process') card-warning @elseif($application->status == 'waiting') card-info @elseif($application->status == 'done') card-success @endif">
                    <div class="card-header">
                        <h3 class="card-title">Информация о заявке</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <strong><i class="fas fa-exchange-alt mr-1 mb-2"></i> Изменить статус: </strong>
                        <div class="d-flex mt-2">
                            <form
                                action="{{ route('backend.applications.change_status', ['application_id'=>$application->id]) }}"
                                method="POST">
                                @csrf
                                @method('PATCH')
                                <input name="status" type="hidden" value="waiting">
                                <button type="submit" class="btn d-inline-block bg-info btn-sm mr-2"
                                        title='Изменить статус на "Ожидание"'>
                                    Ожидание
                                </button>
                            </form>
                            <form
                                action="{{ route('backend.applications.change_status', ['application_id'=>$application->id]) }}"
                                method="POST">
                                @csrf
                                @method('PATCH')
                                <input name="status" type="hidden" value="process">
                                <button type="submit" class="btn d-inline-block bg-warning btn-sm mr-2"
                                        title='Изменить статус на "В процессе"'>
                                    В процессе
                                </button>
                            </form>
                            <form
                                action="{{ route('backend.applications.change_status', ['application_id'=>$application->id]) }}"
                                method="POST">
                                @csrf
                                @method('PATCH')
                                <input name="status" type="hidden" value="done">
                                <button type="submit" class="btn d-inline-block bg-success btn-sm"
                                        title='Изменить статус на "Завершен"'>
                                    Завершен
                                </button>
                            </form>
                        </div>
                        <hr>
                        <strong><i class="fas fa-user mr-1 mb-2"></i>ФИО клиента:</strong>
                        <p class="text-muted">
                            <strong>{{ $application->client_full_name }}</strong>
                        </p>
                        <hr>
                        <strong><i class="fas fa-phone mr-1 mb-2"></i> Контакты:</strong>
                        <p class="text-muted mb-1"> Телефон: {{ $application->client_phone }} </p>
                        @if($application->additional_phone)
                            <p class="text-muted"> Доп. телефон: {{ $application->additional_phone }} </p> @endif
                        <hr>
                        <strong><i class="fas fa-car mr-1"></i>Автомобиль:</strong>
                        <p class="text-muted">
                            <strong>{{ $application->car_brand }}</strong> {{' - ' . $application->car_model }}
                            @if ($application->car_production_year) {{ '(' . $application->car_production_year . ' год)'}} @endif
                            @if($application->car_vin_number) {{ '(VIN: ' . $application->car_vin_number . ')' }} @endif
                        </p>
                        @if($application->description)
                            <hr>
                            <strong><i class="fas fa-file-alt mr-1 mb-2"></i> Описание:</strong>
                            <p class="text-muted">
                                {{ $application->description }}
                            </p>
                        @endif
                        <hr>
                        <strong><i class="fas fa-user mr-1 mb-2"></i> Мастер:</strong>
                        <p class="text-muted">
                            <strong>{{ $application->master->full_name}} </strong> {{' - ' . $application->master->position}}
                        </p>
                        <hr>
                        <strong><i class="fas fa-user mr-1 mb-2"></i> Менеджер:</strong>
                        <p class="text-muted">
                            <strong>{{ $application->user->full_name}} </strong> @if($application->user->position) {{' - ' . $application->user->position }} @endif
                        </p>
                        <hr>
                        <strong><i class="fas fa-clock mr-1 mb-2"></i> Время записи:</strong>
                        <p class="text-muted">
                            <strong>{{ $application->date_time}} </strong> @if($application->approximate_duration)
                                (Примерная
                                продолжительность: {{ $application->approximate_duration }} минут) @endif
                        </p>
                        <hr>
                        <strong><i class="fas fa-toggle-on mr-1 mb-2"></i> Статус:</strong>
                        <p class="text-muted">
                            @if($application->status == 'process')
                                <strong>В процессе</strong>
                            @elseif($application->status == 'waiting')
                                <strong>Ожидание</strong>
                            @elseif($application->status == 'done')
                                <strong>Завершен</strong>
                            @endif
                        </p>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
        </div>
    </div>
@endsection
