@extends('layouts.backend')

@section('title', 'Категории услуг')

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
                <div class="card">
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover text-nowrap mb-4">
                            <thead>
                            <tr>
                                <th>Название категории</th>
                                <th>Описание</th>
                                <th class="text-right">Действия</th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse($service_categories as $category)
                                <tr>
                                    <td>{{ $category->name }}</td>
                                    <td>{{ $category->description }}</td>
                                    <td class="text-right">
                                        <div class="btn-group btn-group-sm">
                                            <a href="{{ route('backend.service_categories.edit', ['service_category_id' => $category->id]) }}" class="btn btn-info"><i class="fas fa-pen"></i></a>
                                            <a href="{{ route('backend.service_categories.delete', ['service_category_id' => $category->id]) }}" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="3"><span>Не добавлено ни одной категории</span></td>
                                </tr>
                            @endforelse
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                {{ $service_categories->links('vendor.pagination.bootstrap-4') }}
            </div>
        </div>
    </div>
@endsection