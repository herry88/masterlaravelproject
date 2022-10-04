@extends('master')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Edit Kategori</h1>
        </div>
        <div class="section-body">
            @if (count($errors) > 0)
                <div class="alert alert-danger alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                    <div class="alert-icon">
                        <i class="fa fa-fw fa-exclamation-triangle"></i>
                    </div>
                    <div class="alert-message">
                        <span><strong>Error!</strong> {{ $errors->first() }}</span>
                    </div>
                </div>
            @endif
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('category.update', $category->id) }}" method="post">
                        @csrf
                        @method('POST')
                        <table class="table table-bordered">
                            <tr>
                                <td>Nama Kategori</td>
                                <td>
                                    <input type="text" class="form-control" value="{{ $category->nmcategory }}"
                                        name="nmcategory">
                                </td>
                            </tr>
                            <tr>
                                <td>Deskripsi</td>
                                <td>
                                    <input type="text" class="form-control" value="{{ $category->deskripsi }}"
                                        name="deskripsi">
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
