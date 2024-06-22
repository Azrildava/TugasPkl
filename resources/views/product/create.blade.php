@extends('layout.layouts')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Data product
                        <a href="{{ route('product.index') }}" class="btn btn-sm btn-primary" style="float : right">Kembali</a>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('product.store') }}" method="POST">
                            @csrf
                            <div class="mb-2">
                                <label for="">Nama product</label>
                                <input type="text" class="form-control @error('name_product') is-invalid @enderror"
                                    name="name_product">
                                @error('name_product')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-2">
                                <label for="stock">Stock</label>
                                <input type="number" class="form-control @error('stock') is-invalid @enderror"
                                    name="stock">
                                @error('stock')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-2">
                                <label for="">Price</label>
                                <input type="text" class="form-control @error('price') is-invalid @enderror"
                                    name="price">
                                @error('price')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-2">
                                <label for="">Deskripsi</label>
                                <input type="text" class="form-control @error('description') is-invalid @enderror"
                                    name="description">
                                @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-2">
                                <label for="id_penulis">Brand</label>
                                <select name="id_penulis" class="form-control @error('id_penulis') is-invalid @enderror">
                                    <option value="">Pilih Penulis</option>
                                    @foreach ($penulis as $data)
                                        <option value="{{ $data->id }}">{{ $data->nama_penulis }}</option>
                                    @endforeach
                                </select>
                                @error('id_penulis')
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
