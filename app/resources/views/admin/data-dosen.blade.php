@extends('adminlte::page')

@section('title', 'Data Dosen')

@section('content_header')
    <div class="d-flex">
        <a href="{{ route('admin.home') }}" class="btn p-0">
            <h6>Beranda</h6>
        </a>
    
        <h6 class="pl-2 pr-2">/</h6>
    
        <a href="" class="btn p-0">
            <h6>Data Dosen</h6>
        </a>
    </div>
@stop

@section('content')
<div class="card p-3">
    <div class="d-flex justify-content-between">
        <h4 class="text-bold">Data Dosen</h4>
        <a href="{{ route('admin.data-dosen.create') }}" class="btn btn-secondary" style="font-size: 16px">
            <i class="fas fa-plus"></i>
            Tambah Dosen
        </a>
    </div>

    <div class="table-responsive mt-4">
        <table id="userTable" class="table" style="width:100%">
            <thead class="table-active">
                <tr>
                    <th scope="col" style="width: 10px">No.</th>
                    <th scope="col">Foto</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Email</th>
                    <th scope="col">Tanggal Dibuat</th>
                    <th class="text-center" scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>
                        <img src="https://source.unsplash.com/random/150x150?sig=1" class="img-fluid img-sm"/>
                    </td>
                    <td>Zabil</td>
                    <td>zabil@gmail.com</td>
                    <td>Besok</td>
                    <td class="text-center">
                        <a href="" class="btn btn-info">
                            <i class="fas fa-info-circle"></i>
                        </a>
                        <a href="" class="btn btn-danger">
                            <i class="fas fa-trash"></i>
                        </a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@stop

@section('css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.css" />
@stop

@section('js')
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.js"></script>

<script>
    $(document).ready(function() {
        var t = $('#userTable').DataTable({
            retrieve: true,
            columnDefs: [{
                searchable: false,
                orderable: false,
                targets: 0,
            }, ],
            order: [
                [1, 'asc']
            ],
        });

        t.on('order.dt search.dt', function() {
            let i = 1;

            t.cells(null, 0, {
                search: 'applied',
                order: 'applied'
            }).every(function(cell) {
                this.data(i++);
            });
        }).draw();

        // let delete_id;
        // $(document).on('click', '.btn-delete', function() {
        //     delete_id = $(this).data('id');
        //     console.log('masuk ndak?');
        // });


        // $('#btn-hapus').on('click', function() {
        //     $.ajax({
        //         type: "POST",
        //         data: {
        //             _token: "{{ csrf_token() }}",
        //             _method: "delete"
        //         },
        //         url: "/admin/project/delete/" + delete_id,
        //         success: function(response) {
        //             t.row($('#row-' + delete_id)).remove().draw();
        //             $('#modal-hapus').modal('hide');
        //             $('#modal-success').modal('show');
        //         },
        //     });

        // });
    });
</script>
@stop