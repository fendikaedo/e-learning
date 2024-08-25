@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title fw-semibold mb-4">Form Data Guru</h5>
                    <a href="{{ route('data_guru.index') }}">
                        <div class="btn btn-primary">
                            Kembali
                        </div>
                    </a>
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('data_guru.store') }}" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label for="nip" class="form-label">NIP</label>
                                    <input type="text" class="form-control" id="nip" value="{{ old('nip') }}"
                                        name="nip" placeholder="Masukkan NIP" required>
                                </div>
                                <div class="mb-3">
                                    <label for="nama_guru" class="form-label">Nama Lengkap</label>
                                    <input type="text" class="form-control" id="nama_guru" value="{{ old('nama_guru') }}"
                                        name="nama_guru" placeholder="Masukkan Nama Lengkap" required>
                                </div>
                                <div class="mb-3">
                                    <label for="jabatan_id" class="form-label">Jabatan</label>
                                    <select class="form-select" name="jabatan_id" id="jabatan_id" required>
                                        <option value="" disabled selected>Piih Jabatan</option>
                                        @foreach ($data_jabatan as $jabatan)
                                            <option value="{{ $jabatan->id }}"{{ old('jabatan_id') == $jabatan->id ? 'selected' : '' }}>{{ $jabatan->nama_jabatan }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                                    <select class="form-select" name="jenis_kelamin" id="jenis_kelamin" required>
                                        <option value="" disabled selected>Pilih Jenis Kelamin</option>
                                        <option value="L">Laki Laki</option>
                                        <option value="P">Perempuan</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="alamat" class="form-label">Alamat</label>
                                    <input type="text" class="form-control" id="alamat" value="{{ old('alamat') }}"
                                        name="alamat" placeholder="Masukkan Alamat Lengkap" required>
                                </div>
                                <div class="mb-3">
                                    <label for="no_telp" class="form-label">Nomer Handphone</label>
                                    <input type="text" class="form-control" id="no_telp" value="{{ old('no_telp') }}"
                                        name="no_telp" placeholder="Masukkan Nomer Handphone/Whatsapp" required>
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
