@extends('layouts.app')
@push('style')
    <!-- Custom styles for this page -->
    <link href="{{ asset('assets/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
@endpush
@section('content')
    <!-- Page Heading -->

    @if ($message = Session::has('sukses'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('sukses') }}
        </div>
    @endif

    <h1 class="h3 mb-2 text-gray-800">Mata Kuliah</h1>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="row">
                <div class="col col-6">
                    <h6 class="m-0 font-weight-bold text-primary">Tabel Mata Kuliah</h6>
                </div>
                <div class="col col-6 float-right">
                    <a href="{{ route('mata-kuliah.create') }}" class="btn btn-primary btn-sm">Tambah</a>
                </div>
            </div>

        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Jurusan</th>
                            <th>Mata Kuliah</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Jurusan</th>
                            <th>Mata Kuliah</th>
                            <th>Aksi</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($matakuliah as $data)
                            <tr>
                                <td>{{ $data->jurusan }}</td>
                                <td>{{ $data->nama }}</td>
                                <td>
                                    <span class="d-inline-block" tabindex="0" data-toggle="tooltip" title="Edit">
                                        <a href="{{ route('mata-kuliah.edit', $data->id) }}"
                                            class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></a>
                                    </span>
                                    <span class="d-inline-block" tabindex="0" data-toggle="tooltip" title="Hapus">
                                        <a href="javascript:void(0)"
                                            onclick="event.preventDefault();
                                                     document.getElementById('delete-form').submit();"
                                            class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                                    </span>
                                    <form id="delete-form" action="{{ route('mata-kuliah.destroy', $data->id) }}"
                                        method="POST" class="d-none">
                                        @method('DELETE')
                                        @csrf
                                    </form>

                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
@push('script')
    <!-- Page level plugins -->
    <script src="{{ asset('assets/vendor/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>

    <!-- Page level custom scripts -->
    <script src="{{ asset('assets/js/demo/datatables-demo.js') }}"></script>
@endpush
