@extends('layouts.backend')

@section('title', 'Услуги')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                @if(session()->has('crud_success'))
                    <div class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <h5><i class="icon fas fa-check"></i> {{ session('crud_success') }}</h5>
                    </div>
                @endif
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap mb-4">
                        <thead>
                        <tr>
                            <th>Наименование услуги</th>
                            <th>Категория</th>
                            <th>Описание</th>
                            <th class="text-right">Действия</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($services as $service)
                            <tr>
                                <td>{{ $service->name }}</td>
                                <td>{{ $service->category->name }}</td>
                                <td>{{ $service->description }}</td>
                                <td class="text-right">
                                    <div class="btn-group btn-group-sm">
                                        <a href="{{ route('backend.services.edit', ['service_id' => $service->id]) }}" class="btn btn-info"><i class="fas fa-pen"></i></a>
                                        <a href="{{ route('backend.services.delete', ['service_id' => $service->id]) }}" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="3"><span>Не добавлено ни одной услуги</span></td>
                            </tr>
                        @endforelse
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
                {{ $services->links('vendor.pagination.bootstrap-4') }}
            </div>
        </div>
    </div>
@endsection