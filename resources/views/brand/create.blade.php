@extends('layout.layouts')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Data brand
                        <a href="{{ route('brand.index') }}" class="btn btn-sm btn-primary" style="float : right">Kembali</a>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('brand.store') }}" method="POST">
                            @csrf
                            <div class="mb-2">
                                <label for="">Nama brand</label>
                                <input type="text" class="form-control @error('name_brand') is-invalid @enderror"
                                    name="name_brand">
                                @error('name_brand')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                                <div class="mt-5">
                                    <button class="btn btn-sm btn-success" type="submit">
                                        simpan
                                    </button>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
