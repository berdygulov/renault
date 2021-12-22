@extends('layouts.backend')

@section('title', 'Мастера')

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
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap mb-4">
                        <thead>
                        <tr>
                            <th>ФИО</th>
                            <th class="text-right">Действия</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($masters as $master)
                            <tr>
                                <td>{{ $master->full_name }}</td>
                                <td class="text-right">
                                    <div class="btn-group btn-group-sm">
                                        <a href="{{ route('backend.masters.edit', ['master_id' => $master->id]) }}" class="btn btn-info"><i class="fas fa-pen"></i></a>
                                        <a href="{{ route('backend.masters.delete', ['master_id' => $master->id]) }}" class="btn btn-danger"><i class="fas fa-trash"></i></a>
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
                {{ $masters->links('vendor.pagination.bootstrap-4') }}
            </div>
        </div>
    </div>
@endsection