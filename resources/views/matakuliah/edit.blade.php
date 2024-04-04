@extends('layouts.app')
@section('content')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Ubah Mata Kuliah</h1>
    </div>

    <div class="row">

        <div class="col-lg-6 ">

            <!-- Default Card Example -->
            <div class="card mb-4">
                <div class="card-header">
                    Form Ubah Mata Kuliah
                </div>
                <div class="card-body">
                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form action="{{ route('mata-kuliah.update', $mata_kuliah->id) }}" method="POST" autocomplete="off">
                        @method('PUT')
                        @csrf
                        <div class="form-group">
                            <label for="jurusan">Jurusan</label>
                            <div class="input-group mb-3">
                                <select class="custom-select @error('jurusan') is-invalid @enderror" id="jurusan"
                                    name="jurusan">
                                    <option value="" disabled>Pilih Jurusan...</option>
                                    <option value="Manajemen Informatika" @if ($mata_kuliah->jurusan == 'Manajemen Informatika') selected @endif>
                                        Manajemen Informatika</option>
                                    <option value="Komunikasi" @if ($mata_kuliah->jurusan == 'Komunikasi') selected @endif>Komunikasi
                                    </option>
                                    <option value="Teknik Informatika" @if ($mata_kuliah->jurusan == 'Teknik Informatika') selected @endif>
                                        Teknik Informatika</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="nama">Nama Mata Kuliah</label>
                            <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror"
                                id="nama" placeholder="Nama" value="{{ $mata_kuliah->nama }}">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>


    </div>
@endsection
