@extends('layout.layouts')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Data Brand
                        <a href="{{ route('brand.index') }}" class="btn btn-sm btn-primary" style="float: right">Kembali</a>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('brand.update', $brand->id)}}" method="post">
                            @csrf
                            @method('put')
                            <div class="mb-2">
                                <label for="">Nama Brand</label>
                                <input type="text" class="form-control @error('name_brand') is-invalid @enderror"
                                    name="name_brand" value="{{$brand->name_brand}}">
                                @error('name_brand')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-2">
                                <button class="btn btn-sm btn-success" type="submit">
                                    Simpan
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection