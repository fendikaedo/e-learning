@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title fw-semibold mb-4">Detail Data Guru</h5>
                    <a href="{{ route('data_guru.index') }}">
                        <div class="btn btn-primary">
                            Kembali
                        </div>
                    </a>
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('data_guru.show', $id_guru->id) }}" method="POST">
                                @csrf
                                <fieldset disabled>
                                    <div class="mb-3">
                                        <label for="nip" class="form-label">NIP</label>
                                        <input type="text" class="form-control" id="nip"
                                            value="{{ $id_guru->nip }}" name="nip" placeholder="Masukkan NIP" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="nama_guru" class="form-label">Nama Lengkap</label>
                                        <input type="text" class="form-control" id="nama_guru"
                                            value="{{ $id_guru->nama_guru }}" name="nama_guru"
                                            placeholder="Masukkan Nama Lengkap" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="jabatan_id" class="form-label">Jabatan</label>
                                        <input type="text" class="form-control" id="jabatan_id"
                                            value="{{ $id_guru->jabatan_id }}" name="jabatan_id" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                                        <input type="text" class="form-control" id="jenis_kelamin"
                                            value="{{ $id_guru->jenis_kelamin }}" name="jenis_kelamin" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="alamat" class="form-label">Alamat</label>
                                        <input type="text" class="form-control" id="alamat"
                                            value="{{ $id_guru->alamat }}" name="alamat" placeholder="Masukkan Alamat Lengkap"
                                            required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="no_telp" class="form-label">Nomer Handphone</label>
                                        <input type="text" class="form-control" id="no_telp"
                                            value="{{ $id_guru->no_telp }}" name="no_telp"
                                            placeholder="Masukkan Nomer Handphone/Whatsapp" required>
                                    </div>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
