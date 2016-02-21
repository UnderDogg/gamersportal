@extends('admin.layouts.admin_template')

@section('content')
    <div class="container-fluid">


        <div class="row page-title-row">
            <div class="col-md-6">
                <h3>Games &raquo; <small>Listing</small></h3>
            </div>
            <div class="col-md-6 text-right">
                <a href="/admin/games/create" class="btn btn-success btn-md">
                    <i class="fa fa-plus-circle"></i> New Game
                </a>
            </div>
        </div>

        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Games</h3>
                    </div>
                    <div class="panel-body">

                        <table id="games-table" class="table table-striped table-bordered">
                            <thead>
                            <tr>
                                <th>GameName</th>
                                <th>Updated</th>
                                <th data-sortable="false">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                                @todo
                            </tbody>
                            <tfoot>
                            <tr>
                                <th>GameName</th>
                                <th>Updated</th>
                                <th data-sortable="false">Actions</th>
                            </tr>
                            </tfoot>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

@section('scripts')
    <script>
        $(function () {
            $("#games-table").DataTable({
                order: [[0, "desc"]],
                "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
            });
        });
    </script>
@stop
