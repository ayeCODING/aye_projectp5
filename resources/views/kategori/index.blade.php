@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="float-start">
                        kategori
                    </div>
                    <div class="float-end">
                            <a href="{{ route('kategori.create') }}" class="btn btn-sm btn-outline-primary">Tambah
                                Data</a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="dataTable" class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama kategori</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $no = 1; @endphp
                                @foreach ($kategori as $data)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $data->nama_kategori }}</td>
                                    <td>
                                        <form action="{{ route('kategori.destroy', $data->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" onclick="return confirm('Are You Sure ?');"
                                                class="btn btn-sm btn-outline-danger">Delete</button>
                                        </form>
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
