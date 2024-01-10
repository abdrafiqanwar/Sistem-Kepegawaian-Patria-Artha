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

    @if($msg = Session::get('success'))
    <div class="alert alert-success alert-dismissible fade show mt-3 mb-0" role="alert">
        {{ $msg }} 
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif

    <div class="table-responsive mt-4">
        <table id="userTable" class="table" style="width:100%">
            <thead class="table-active">
                <tr>
                    <th scope="col" style="width: 10px">No.</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Email</th>
                    <th scope="col">Tanggal Dibuat</th>
                    <th class="text-center" scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                <tr id="row-{{ $user->id }}">
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->created_at->format('d-m-Y') }}</td>
                    <td class="text-center">
                        <a href="" class="btn btn-info">
                            <i class="fas fa-info-circle"></i>
                        </a>
                        <a href="" class="btn btn-danger btn-delete" data-toggle="modal" data-target="#modal-hapus" 
                        data-id="{{ $user->id }}">
                            <i class="fas fa-trash"></i>
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<div class="modal fade" id="modal-hapus" aria-modal="true" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <div class="d-flex align-items-center">
                    <div class="flex-shrink-0">
                        <img src="{{ asset('img/alert_merah.svg')}}" alt="">
                    </div>
                    <div class="flex-grow-1 ms-3">
                        <h4 class="modal-title ml-3 align-self-center">Hapus Akun Dosen</h4>
                    </div>
                </div>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">x</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Data yang sudah dihapus tidak bisa dikembalikan</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-danger" id="btn-hapus">Hapus</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modal-success" aria-modal="true" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <div class="d-flex align-items-center">
                    <div class="flex-shrink-0">
                        <i class="fas fa-check-circle fa-2x" style="color: #6cc070"></i>
                    </div>
                    <div class="flex-grow-1 ms-3">
                        <h4 class="modal-title ml-3 align-self-center">Akun Berhasil Dihapus</h4>
                    </div>
                </div>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">x</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Data Yang Anda Pilih Telah Berhasil Dihapus!</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
@stop

@section('css')
@stop

@section('js')
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

        let id;
        $(document).on('click', '.btn-delete', function(){
            id = $(this).data('id');
        });

        $('#btn-hapus').on('click', function(){
            $.ajax({
                url: "data-dosen/delete/" + id,
                method: "post",
                data: {
                    _token: "{{ csrf_token() }}",
                    _method: "post"
                },
                success: function(response){
                    t.row($('#row-' + id)).remove().draw();
                    $('#modal-hapus').modal('hide');
                    $('#modal-success').modal('show');
                },
            });
        });
    });
</script>
@stop