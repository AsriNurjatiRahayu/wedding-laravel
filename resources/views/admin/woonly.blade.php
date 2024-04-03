@extends('template.template')

@section('container')
    <h1>Wo Only</h1>
    <div class="row" id="table-striped-dark">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Data WO Only</h4>
                </div>
                <div class="container">
                    <a href="tambahwo" class="btn btn-primary">Tambah Data</a>
                </div>
                <br>
                <div class="card-content">
                    <!-- table strip dark -->
                    <div class="table-responsive">
                        <table class="table table-striped table-dark mb-0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Layanan</th>
                                    <th>Harga</th>
                                    <th>Fasilitas</th>
                                    <th>Equipment</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($wo as $w)
                                    <tr>
                                        <td>{{ $w->id }}</td>
                                        <td>{{ $w->nama_layanan }}</td>
                                        <td>{{ $w->harga }}</td>
                                        <td>{{ $w->fasilitas }}</td>
                                        <td>{{ $w->peralatan_pengantin }}</td>
                                        <td>
                                            <a href="{{ url('editwo/' . $w->id) }}" class="btn icon btn-primary"><i class="bi bi-pencil"></i></a>
                                            <a href="{{ url('hapuswo/' . $w->id) }}" class="btn icon btn-danger"><i class="bi bi-x"></i></a>
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
@endsection
