@extends('backend.layouts.layout_backend_main')
@section('content')

    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>รายการผู้ใช้งาน</h2>
                    <div class="navbar-right"><a href="{{url('admin/user/create')}}" class="btn btn-success btn-sm"><i class="fa fa-plus"></i> <strong>เพิ่มผู้ใช้</strong>
                        </a>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <p class="text-muted font-13 m-b-30"></p>
                    <table id="users_table" class="table table-striped table-bordered table-hover">
                        <thead>
                        <tr>
                            <th>ลำดับ</th>
                            <th>ชื่อ-สกุล</th>
                            <th>อีเมล์</th>
                            <th>วันที่สร้าง</th>
                            <th>วันที่แก้ไข</th>
                            <th>แก้ไข</th>
                        </tr>
                        </thead>
                    </table>

                </div>
            </div>
        </div>

    </div>


@stop
@push('scripts')
<script type="text/javascript">

    var dataTable;

    $(document).ready(function () {

        usersDataTable();

    });

    function usersDataTable() {

        dataTable = $('#users_table').DataTable({
//            processing: true,
            //serverSide: true,
            ajax: {
                url: '{!! route('user.loadUsersDataTable') !!}',
                method: 'POST'
            }, columnDefs: [
                {targets: 1},
                {targets: 2},
                {targets: 3},
                {targets: 4},
                {
                    targets: 5, render: function (data, type, row) {
                    var buttons = '<div class="btn-toolbar"> ';
                    buttons += '<a href="{{ url('/')}}/admin/user/' + row.id + '/edit "  class="btn btn-warning btn-sm glyphicon glyphicon-pencil " data-toggle="tooltip" data-placement="top" title="แก้ไขข้อมูล"></a>';
                    buttons += '<a href="javascript:void(0)" onclick="deleteData(' + row.id + ')" class="button_delete btn btn-danger btn-sm glyphicon glyphicon-trash" data-toggle="tooltip" data-placement="top" title="ลบข้อมูล"></a>';
                    buttons += '</div>'
                    return buttons;
                }
                },
            ],
            columns: [
                {data: null, "sClass": "text-center", "bSortable": false, "sWidth": "3%"}, //1st column
                {data: 'name', name: 'name'},
                {data: 'email', name: 'email'},
                {data: 'created_at', name: 'created_at'},
                {data: 'updated_at', name: 'updated_at'}
            ],
            pageLength: 10,
            bJQueryUI: true,
            bLengthChange: true,
            bFilter: true,
            bInfo: true,
            bSort: false,
            autoWidth: false,
            responsive: true,
            scrollX: true,
            scrollCollapse: true,
        });

        dataTable.on('order.dt search.dt', function () {
            dataTable.column(0, {search: 'applied', order: 'applied'}).nodes().each(function (cell, i) {
                cell.innerHTML = i + 1;
            });
        }).draw();

    }

    function deleteData(id) {
        if (id != "") {
            BootstrapDialog.show({
                title: '<i class="glyphicon glyphicon-warning-sign"></i> Warning',
                size: BootstrapDialog.SIZE_SMALL,
                type: BootstrapDialog.TYPE_WARNING,
                message: 'คุณต้องการลบข้อมูลใช่หรือไม่?',
                closable: false, // <-- Default value is false
                draggable: true, // <-- Default value is false
                buttons: [{
                    icon: 'fa fa-check-square-o',
                    label: ' ตกลง',
                    cssClass: 'btn-primary',
                    action: function (dialog) {
                        $.ajax({
                            url: '{{ url('/admin/user') }}' + '/' + id,
                            data: {"_token": "{{ csrf_token() }}"},
                            type: 'DELETE',
                            success: function (response) {
                                if (response.success == true) {
                                    dataTable.ajax.reload();
                                } else {
                                    alert('failed');
                                }
                            }
                        });
                        dialog.close();
                    }
                }, {
                    icon: 'fa fa-refresh',
                    label: ' ยกเลิก',
                    cssClass: 'btn-danger',
                    action: function (dialog) {
                        dialog.close();
                    }
                }]
            });
        }
    }

</script>
@endpush
