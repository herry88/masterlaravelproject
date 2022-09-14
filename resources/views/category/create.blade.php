@extends('master')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Tambah Kategori</h1>
        </div>
        <div class="section-body">
            <div class="card">
                <div class="card-body">
                    <form action="#" method="post">
                        @csrf
                        @method('POST')
                        <table class="table table-bordered">
                            <tr>
                                <td>Nama Kategori</td>
                                <td>
                                    <input type="text" class="form-control" name="nmcategory">
                                </td>
                            </tr>
                            <tr>
                                <td>Deskripsi</td>
                                <td>
                                    <input type="text" class="form-control" name="deskripsi">
                                </td>
                            </tr>
                            <tr>
                                <td>&nbsp;</td>
                                <td>
                                    <button class="btn btn-primary" type="submit">Save</button>
                                </td>
                            </tr>
                        </table>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
