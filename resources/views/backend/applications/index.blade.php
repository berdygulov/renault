@extends('layouts.backend')

@section('title', 'Заявки')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Заявки</h3>

                        <div class="card-tools">
                            <div class="input-group input-group-sm" style="width: 150px;">
                                <input type="text" name="table_search" class="form-control float-right"
                                       placeholder="Search">

                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-default">
                                        <i class="fas fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover text-nowrap">
                            <thead>
                            <tr>
                                <th>Номер</th>
                                <th>ФИО</th>
                                <th>Марка(модель)</th>
                                <th>Время</th>
                                <th>Инженер</th>
                                <th>Статус</th>
                                <th class="text-right">Действие</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if(!$applications->isEmpty())
                                @foreach($applications as $application)
                                    <tr>
                                        <td>{{ $application->id }}</td>
                                        <td>{{ $application->client_surname .' '. $application->client_name}}</td>
                                        <td>{{ $application->car_brand . ' (' . $application->car_model . ')' }}</td>
                                        <td><strong> {{ $application->date_time }} </strong></td>
                                        <td>master_id</td>
                                        <td>
                                            @if($application->status == 'done')
                                                <span class="badge badge-success">
                                                    Завершен
                                                </span>
                                            @elseif ($application->status == 'process')
                                                <span class="badge badge-warning">
                                                    В процессе
                                                </span>
                                            @elseif ($application->status == 'waiting')
                                                <span class="badge badge-info">
                                                    Ожидание
                                                </span>
                                            @else
                                                ----
                                            @endif
                                        </td>
                                        <td class="text-right">
                                            <div class="btn-group btn-group-sm">
                                                <a href="#" class="btn btn-info"><i class="fas fa-eye"></i></a>
                                                <a href="#" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                    <span>Заявок нет</span>
                                </tr>
                            @endif
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                {{ $applications->links('vendor.pagination.bootstrap-4') }}
            </div>
        </div>
    </div>
@endsection
