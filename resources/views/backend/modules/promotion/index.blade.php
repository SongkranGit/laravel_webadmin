@extends('backend.layouts.layout_backend_main')
@section('content')

    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>รายการโปรโมชั่น</h2>
                    <div class="navbar-right"><a href="{{url('admin/promotion/create')}}" class="btn btn-primary"><i class="fa fa-plus"></i> <strong>เพิ่มโปรโมชั่น</strong>
                        </a>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <p class="text-muted font-13 m-b-30"></p>
                    <table id="promotion_table" class="table table-striped table-bordered table-hover">
                        <thead>
                        <tr>
                            <th>ลำดับ</th>
                            <th>รูปภาพ</th>
                            <th>ชื่อโปรโมชั่น</th>
                            <th>สร้างโดย</th>
                            <th>วันที่สร้าง</th>
                            <th>สถานะ</th>
                            <th>&nbsp;</th>
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

        promotionDataTable();

    });

    function promotionDataTable() {

        dataTable = $('#promotion_table').DataTable({
            ajax: {
                url: '{!! route('promotion.loadPromotionsDataTable') !!}',
                method: 'POST'
            },
            columns: [
                {data: null, "sClass": "text-center", "bSortable": false, "sWidth": "3%"}, //1st column
                {data: 'image_name', name: 'image_name'},
                {data: 'name', name: 'name'},
                {data: 'created_by', name: 'created_by'},
                {data: 'created_at', name: 'created_at'},
                {data: 'is_active', name: 'is_active'},
            ],
            columnDefs: [
                {width: '15%',className: "text-center", targets: 1 , render: function (data, type, row) {
                    var html = '<img src="{{url('/').'/' }}'+row.image_name+'" height="60"/>';
                    return html;
                }},
                {width: '25%',targets: 2},
                {width: '15%',targets: 3},
                {width: '10%',className: "text-center",targets: 4},
                {width: '8%',className: "text-center", targets: 5, render: function (data, type, row) {
                    var label_text = '<div class="text-center"> ';
                    if (parseInt(row.is_active) == 0) {
                        label_text += '<h4><span class=\"label label-success\" >' + 'ใช้งาน' + '</span></h4>';
                    } else {
                        label_text += '<h4><span class=\"label label-danger\" >' + 'ไม่ใช้งาน' + '</span></h4>';
                    }
                    label_text += '</div>'
                    return label_text;
                }},
                {width: '10%',className: "text-center", targets: 6, render: function (data, type, row) {
                    var buttons = '<div class=""> ';
                    buttons += '<a href="{{ url('/')}}/admin/promotion/' + row.id + '/edit "  class="btn btn-warning btn-sm glyphicon glyphicon-pencil " data-toggle="tooltip" data-placement="top" title="แก้ไขข้อมูล"></a>';
                    buttons += '<a href="javascript:void(0)" onclick="deleteData(' + row.id + ')" class="button_delete btn btn-danger btn-sm glyphicon glyphicon-trash" data-toggle="tooltip" data-placement="top" title="ลบข้อมูล"></a>';
                    buttons += '</div>'
                    return buttons;
                }
                },
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
                            url: '{{ url('/admin/promotion') }}' + '/' + id,
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
