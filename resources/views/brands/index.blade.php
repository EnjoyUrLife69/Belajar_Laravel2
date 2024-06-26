@extends('layouts.app')



@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">

                <div class="card">
                    <div class="card-header"><b>Data Brand</b>
                        <a href="{{ route('brand.create') }}" class="btn btn-sm btn-primary float-end">Add Data +</a>
                    </div>
                    @if (session('success'))
                        <div class="alert alert-success fade show" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif

                    <div class="card-body">

                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Name Brand</th>
                                    <th scope="col" style="text-align: center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $no = 1; @endphp
                                @foreach ($brand as $data)
                                    <tr>
                                        <th scope="row">{{ $no++ }}</th>
                                        <td>{{ $data->name_brand }}</td>
                                        <form action="{{ route('brand.destroy', $data->id) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <td class="text-end">
                                                <a href="{{ route('brand.edit', $data->id) }}"
                                                    class="btn btn-sm btn-success">Edit</a>
                                                <a href="{{ route('brand.show', $data->id) }}"
                                                    class="btn btn-sm btn-warning">Show</a>
                                                <button class="btn btn-sm btn-danger" type="submit"
                                                    onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                                                    Delete
                                                </button>
                                            </td>
                                        </form>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
