@extends('admin.master')

@section('title')
    {{ trans('admin_title_page_trans.Category') }}
@stop

@section('css')

@stop

@section('title_page')
    {{ trans('admin_title_page_trans.Category') }}
@endsection

@section('content')
    <!-- Content Wrapper. Contains page content -->


    <div class="card-header">{{ trans('category_trans.Create') }}</div>
    <!-- /.card-header -->
    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>{{ trans('category_trans.name') }}</th>
                    <th>{{ trans('category_trans.image') }}</th>
                    <th>{{ trans('category_trans.is_showing') }}</th>
                    <th>{{ trans('category_trans.is_popular') }}</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Trident</td>
                    <td>Internet
                        Explorer 4.0
                    </td>
                    <td>Win 95+</td>
                    <td> 4</td>
                    <td>
                        <a href="#" class="btn btn-sm btn-outline-dark">{{ trans('category_trans.View') }}</a>
                        <a href="#" class="btn btn-sm btn-outline-warning">{{ trans('category_trans.Edit') }}</a>
                        <a href="#" class="btn btn-sm btn-outline-danger">{{ trans('category_trans.Delete') }}</a>
                    </td>
                </tr>
            </tbody>
            <tfoot>
                <tr>
                    <th>{{ trans('category_trans.name') }}</th>
                    <th>{{ trans('category_trans.image') }}</th>
                    <th>{{ trans('category_trans.is_showing') }}</th>
                    <th>{{ trans('category_trans.is_popular') }}</th>
                    <th>Action</th>
                </tr>
            </tfoot>
        </table>
    </div>
    <!-- /.card-body -->
    <div id="hello"></div>
@endsection

@section('js')
    <!-- DataTables -->
    <script src="{{ asset('assets/plugins/datatables/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.js') }}"></script>

    <script>
        $(function() {
            $("#example1").DataTable();
            /* $('#example2').DataTable({
              "paging": true,
              "lengthChange": false,
              "searching": false,
              "ordering": true,
              "info": true,
              "autoWidth": false,
            }); */
        });
    </script>
@endsection
