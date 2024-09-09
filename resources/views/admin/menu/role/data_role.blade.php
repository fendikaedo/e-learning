@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-lg d-flex align-items-stretch">
            <div class="card w-100">
                <div class="card-body p-4">
                    <h5 class="card-title fw-semibold mb-4">Data Role eLearning</h5>
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <form class="d-flex" role="search">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success" type="submit">
                                <img src="{{ asset('assets/images/button/search.svg') }}" width="20" alt="">
                            </button>
                        </form>
                        <a href="{{ route('role.create') }}">
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
                                        <h6 class="fw-semibold mb-0">Role</h6>
                                    </th>
                                    {{-- <th class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0">Actions</h6>
                                    </th> --}}
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data_role as $data)
                                    <tr>
                                        <td class="border-bottom-0">
                                            <h6 class="fw-semibold mb-0">{{ $loop->iteration }}</h6>
                                        </td>
                                        <td class="border-bottom-0">
                                            <h6 class="fw-normal mb-1">{{ $data->nama_role }}</h6>
                                        </td>
                                        {{-- <td class="border-bottom-0">
                                            <form action="{{ route('mapel.destroy', $data->id) }}" method="POST">
                                                @method('DELETE')
                                                @csrf
                                                <span>
                                                    <button class="btn btn-sm">
                                                        <img src="{{ asset('assets/images/button/delete.svg') }}"
                                                            width="20" alt="">
                                                    </button>
                                                </span>
                                            </form>
                                        </td> --}}
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
