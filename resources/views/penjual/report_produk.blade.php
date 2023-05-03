@extends('layouts.app')


@section('content')
<div class="container ">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card border border-success">
                <div class="card-header bg-success text-light">Report Produk</div>


                <div class="card-body">
                    <div class="row mb-2">
                        @if (\Session::has('message'))
                            <div class="alert alert-success">
                                {!! \Session::get('message') !!}
                            </div>
                        @elseif(\Session::has('error'))
                            <div class="alert alert-danger">
                                {!! \Session::get('error') !!}
                            </div>
                        @endif
                    </div>
                    <div class="responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr class="bg-success text-white" align="center">
                                    <th scope="col">No</th>
                                    <th scope="col">Gambar Produk</th>
                                    <th scope="col">Nama Produk</th>
                                    <th scope="col">Stok</th>
                                    <th scope="col">Deskripsi</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $no=1; @endphp
                                @foreach($data_produk as $row)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td align="center">
                                        <img class="img-fluid rounded shadow-sm"
                                            src="{{ asset('gambar/gambar_produk/'.$row->gambar_produk) }}"
                                            style="width: 90px; height:90px" alt="Gambar Produk">
                                    </td>
                                    <td>{{ $row->nama_produk }}</td>
                                    <td>{{ $row->stok }}</td>
                                    <td>{{ $row->deskripsi_produk }}</td>
                                    <td align="center">
                                        <a href="{{ url('/edit_produk/'.$row->id) }}" class="btn btn-sm btn-success">Edit</a>
                                        <a href="{{ url('/hapus_produk/'.$row->id) }}" class="btn btn-sm btn-danger">Hapus</a>
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
