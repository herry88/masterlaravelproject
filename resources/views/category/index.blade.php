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
                                    <th>Tools</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
