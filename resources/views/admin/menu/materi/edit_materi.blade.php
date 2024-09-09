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
                    <div class="card mt-3">
                        <div class="card-body">
                            <form action="{{ route('materi.update', $id_materi->id) }}" method="POST">
                                @method('put')
                                @csrf
                                <div class="mb-3">
                                    <label for="mapel_id" class="form-label">Mata Pelajaran</label>
                                    <select class="form-select" name="mapel_id" id="mapel_id" required>
                                        <option value="" disabled selected>Piih Mata Pelajaran</option>
                                        @foreach ($data_mapel as $mapel)
                                            <option value="{{ $mapel['id'] }}"
                                                {{ old('mapel_id', $id_materi['mapel_id']) == $mapel['id'] ? 'selected' : '' }}>
                                                {{ $mapel['nama_mapel'] }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="nama_materi" class="form-label">Nama Materi</label>
                                    <input type="text" class="form-control" id="nama_materi"
                                        value="{{ $id_materi->nama_materi }}" name="nama_materi"
                                        placeholder="Masukkan Nama Materi" required>
                                </div>
                                <div class="mb-3">
                                    <label for="file_materi" class="form-label">Upload File Materi</label>
                                    @if ($id_materi->file_materi)
                                        <p>File saat ini: <a href="{{ Storage::url($id_materi->file_materi) }}"
                                                target="_blank">Lihat File</a></p>
                                    @endif
                                    <input type="file" class="form-control" name="file_materi" id="file_materi"
                                        value="{{ $id_materi->file_materi }}">
                                </div>
                                <button type="submit" class="btn btn-success">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
