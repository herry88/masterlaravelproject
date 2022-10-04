@extends('master')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Data Kategori</h1>
        </div>
        <div class="section-body">

            <div class="card">

                <div class="card-body">
                    <div class="table-responsive">
                        <a href="{{ route('category.create') }}" class="btn btn-primary">Tambah Data</a>

                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nama Kategori</th>
                                    <th>Deskripsi</th>
                                    <th>Tools</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($category as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->nmcategory }}</td>
                                        <td>{{ $item->deskripsi }}</td>
                                        <td><a href="{{ route('category.edit', $item->id) }}" class="btn btn-warning"><i
                                                    class="fas fa-edit"></i>Edit</a>
                                            <a href="#" class="btn btn-danger"><i class="fas fa-trash"></i> Hapus</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
