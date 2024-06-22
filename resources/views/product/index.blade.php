@extends('layout.layouts')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                @if (session('success'))
                    <div class="alert alert-success fade show" role="alert">
                        {{ session('success') }}
                    </div>
                @endif
                <div class="card">
                    <div class="card-header">Data brand
                        <a href="{{ route('brand.create') }}" class="btn btn-sm-rounded btn-primary"
                            style="float : right">Tambah</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="datatable">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama brand</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                @php $no = 1; @endphp
                                <tbody>
                                    @foreach ($brand as $item)
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>{{ $item->name_brand }}</td>

                                            <td>
                                                <form action="{{ route('brand.destroy', $item->id) }}"
                                                    id="delete-data"method="post">
                                                    @method('DELETE')
                                                    @csrf
                                                    <a href="{{ route('brand.edit', $item->id) }}"
                                                        class="btn btn-sm btn-success">
                                                        Edit
                                                    </a>
                                                    <a href="{{ route('brand.show', $item->id) }}"
                                                        class="btn btn-sm btn-warning">
                                                        Show
                                                    </a>

                                                    <button class="btn btn-sm btn-danger" type="submit"
                                                        onclick="return confirm('Apakah Anda Yakin ingin menghapus data ini')">
                                                        Delete
                                                    </button>
                                                </form>
                                            </td>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
