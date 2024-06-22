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
                            <div class="mb-2">
                                <label for="">Nama brand</label>
                                <input type="text" class="form-control @error('name_brand') is-invalid @enderror"
                                    name="name_brand" value="{{$brand->name_brand}}" disabled>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
@endsection