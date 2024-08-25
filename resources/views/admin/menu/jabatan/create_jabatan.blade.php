@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title fw-semibold mb-4">Form Data Jabatan</h5>
                    <a href="{{ route('data_jabatan.index') }}">
                        <div class="btn btn-primary">
                            Kembali
                        </div>
                    </a>
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('data_jabatan.store') }}" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label for="nama_jabatan" class="form-label">Nama Jabatan</label>
                                    <input type="text" class="form-control" id="nama_jabatan" value="{{ old('nama_jabatan') }}"
                                        name="nama_jabatan" placeholder="Masukkan Nama Jabatan" required>
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
