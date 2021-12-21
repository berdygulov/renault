@extends('layouts.backend')

@section('title', 'Мастера')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                        <thead>
                        <tr>
                            <th>ФИО</th>
                            <th>Услуги</th>
                            <th class="text-right">Действия</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($masters as $master)
                            <tr>
                                <td>{{ $master->full_name }}</td>
                                <td>
                                    <ul>
                                        @forelse($master->services as $service)
                                            <li>
                                                {{ $service->name }}
                                            </li>
                                        @empty
                                            <li>
                                                Нет привязанных услуг...
                                            </li>
                                        @endforelse
                                    </ul>
                                </td>
                                <td class="text-right">
                                    <div class="btn-group btn-group-sm">
                                        <a href="#" class="btn btn-info"><i class="fas fa-eye"></i></a>
                                        <a href="#" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="3"><span>Не добавлено ни одного мастера</span></td>
                            </tr>
                        @endforelse
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
        </div>
    </div>
@endsection