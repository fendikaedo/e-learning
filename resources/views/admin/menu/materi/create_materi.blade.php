@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title fw-semibold mb-4">Form Data Materi</h5>
                    <a href="{{ route('materi.index') }}">
                        <div class="btn btn-primary">
                            Kembali
                        </div>
                    </a>
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('materi.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label for="mapel_id" class="form-label">Mata Pelajaran</label>
                                    <select class="form-select" name="mapel_id" id="mapel_id" required>
                                        <option value="" disabled selected>Piih Mata Pelajaran</option>
                                        @foreach ($data_mapel as $mapel)
                                            <option value="{{ $mapel->id }}"{{ old('mapel_id') == $mapel->id ? 'selected' : '' }}>{{ $mapel->nama_mapel }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="nama_materi" class="form-label">Nama Materi</label>
                                    <input type="text" class="form-control" id="nama_materi" value="{{ old('nama_materi') }}"
                                        name="nama_materi" placeholder="Masukkan Nama Materi" required>
                                </div>
                                <div class="mb-3">
                                    <label for="file_materi" class="form-label">Upload File Materi</label>
                                    <input type="file" class="form-control" name="file_materi" id="file_materi">
                                    <small class="form-text text-muted">Format File = pdf, doc, docx</small>
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
