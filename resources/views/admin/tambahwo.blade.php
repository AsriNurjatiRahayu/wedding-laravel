@extends('template.template')

@section('container')
<div class="page-heading">
    <h3>WO Only</h3>
</div>
<!-- // Basic multiple Column Form section start -->
<section id="multiple-column-form">
    <div class="row match-height">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Tambah Data WO</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <form action="/aksi_tambah" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="nama_layanan">Nama Layanan</label>
                                        <br>
                                        <input type="text" id="nama_layanan" class="form-control" placeholder="Nama Layanan" name="nama_layanan">
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="harga">Harga</label>
                                        <br>
                                        <input type="text" id="harga" class="form-control" placeholder="Harga" name="harga">
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="peralatan_pengantin">Equipment</label>
                                        <br>
                                        <textarea id="peralatan_pengantin" class="form-control" rows="10" placeholder="Equipment" name="peralatan_pengantin"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="fasilitas">Fasilitas</label>
                                        <br>
                                        <textarea id="fasilitas" class="form-control" rows="5" name="fasilitas" placeholder="Fasilitas"></textarea>
                                    </div>
                                </div>
                                <div class="col-12 d-flex justify-content-end">
                                    <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
                                    <button type="reset" class="btn btn-light-secondary me-1 mb-1">Reset</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
