@extends('layouts.backend')

@section('title', 'Создание заявки')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card card-info">
                    <div class="card-header">
                        <h3 class="card-title">Date picker</h3>
                    </div>
                    <div class="card-body">
                        <!-- Date and time -->
                        <div class="form-group">
                            <div class="input-group date" id="datetimepicker1" data-target-input="nearest">
                                <input type="text" class="form-control datetimepicker-input"
                                       data-target="#datetimepicker1"/>
                                <div class="input-group-append" data-target="#datetimepicker1"
                                     data-toggle="datetimepicker">
                                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                </div>
                            </div>
                        </div>
                        <!-- /.form group -->
                        <div class="card-footer">
                            Visit <a href="https://getdatepicker.com/5-4/">tempusdominus </a> for more examples and
                            information about
                            the plugin.
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
        $('#datetimepicker1').datetimepicker({
            icons: {
                time: "fa fa-clock",
                date: "fa fa-calendar",
                up: "fa fa-arrow-up",
                down: "fa fa-arrow-down"
            }
        });
    </script>
@endsection

