@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title fw-semibold mb-4">Form Data Mata Pelajaran</h5>
                    <a href="{{ route('mapel.index') }}">
                        <div class="btn btn-primary">
                            Kembali
                        </div>
                    </a>
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('mapel.store') }}" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label for="nama_mapel" class="form-label">Nama Mapel</label>
                                    <input type="text" class="form-control" id="nama_mapel" value="{{ old('nama_mapel') }}"
                                        name="nama_mapel" placeholder="Masukkan Nama Mata Pelajaran" required>
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
