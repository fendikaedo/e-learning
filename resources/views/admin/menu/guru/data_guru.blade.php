@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-lg d-flex align-items-stretch">
            <div class="card w-100">
                <div class="card-body p-4">
                    <h5 class="card-title fw-semibold mb-4">Data Guru eLearning</h5>
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <form class="d-flex" role="search">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success" type="submit">
                                <img src="{{ asset('assets/images/button/search.svg') }}" width="20" alt="">
                            </button>
                        </form>
                        <a href="{{ route('data_guru.create') }}">
                            <div class="btn btn-success">
                                <img src="{{ asset('assets/images/button/create.svg') }}" width="20" alt="">
                            </div>
                        </a>
                    </div>

                    <div class="table-responsive">
                        <table class="table table-striped text-nowrap mb-0 align-items-md-center text-center">
                            <thead class="text-dark fs-4">
                                <tr>
                                    <th class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0">No</h6>
                                    </th>
                                    <th class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0">NIP</h6>
                                    </th>
                                    <th class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0">Nama Lengkap</h6>
                                    </th>
                                    <th class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0">Jabatan</h6>
                                    </th>
                                    <th class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0">Jenis Kelamin</h6>
                                    </th>
                                    <th class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0">Alamat</h6>
                                    </th>
                                    <th class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0">No Handphone</h6>
                                    </th>
                                    <th class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0">Actions</h6>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($guru as $data)
                                    <tr>
                                        <td class="border-bottom-0">
                                            <h6 class="fw-semibold mb-0">{{ $loop->iteration }}</h6>
                                        </td>
                                        <td class="border-bottom-0">
                                            <h6 class="fw-normal mb-1">{{ $data->nip }}</h6>
                                        </td>
                                        <td class="border-bottom-0">
                                            <p class="mb-0 fw-normal">{{ $data->nama_guru }}</p>
                                        </td>
                                        <td class="border-bottom-0">
                                            <span
                                                class="badge bg-primary rounded-3 fw-semibold">{{ $data->jabatan->nama_jabatan }}</span>
                                        </td>
                                        <td class="border-bottom-0">
                                            <h6 class="fw-normal mb-0">{{ $data->jenis_kelamin }}</h6>
                                        </td>
                                        <td class="border-bottom-0">
                                            <h6 class="fw-normal mb-0">{{ $data->alamat }}</h6>
                                        </td>
                                        <td class="border-bottom-0">
                                            <h6 class="fw-normal mb-0">{{ $data->no_telp }}</h6>
                                        </td>
                                        <td class="border-bottom-0">
                                            <span>
                                                <div class="btn btn-sm btn-primary">
                                                    <img src="{{ asset('assets/images/button/edit.svg') }}" width="20"
                                                        alt="">
                                                </div>
                                            </span>
                                            <span>
                                                <a href="">
                                                    <div class="btn btn-sm btn-secondary">
                                                        <img src="{{ asset('assets/images/button/show.svg') }}"
                                                            width="20" alt="">
                                                    </div>
                                                </a>
                                            </span>
                                            <span>
                                                <div class="btn btn-sm btn-danger">
                                                    <img src="{{ asset('assets/images/button/delete.svg') }}"
                                                        width="20" alt="">
                                                </div>
                                            </span>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="mt-4">
                        <ul class="pagination">
                            <li class="page-item disabled">
                                <span class="page-link">Previous</span>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item active" aria-current="page">
                                <span class="page-link">2</span>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#">Next</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
