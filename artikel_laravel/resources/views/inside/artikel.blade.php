@extends('inside.layout')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      &nbsp;
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="#">Data</a></li>
      <li class="active">Artikel</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box">
          <div class="box-header with-border">
            <h3 class="box-title">List Artikel</h3>
            <button class="btn btn-primary" style="float: right;" id="openAddModal">Tambah Artikel</button>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th style="width: 10px">#</th>
                  <th>Judul Artikel</th>
                  <th>Isi Artikel</th>
                  <th>Gambar</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php $no = 0; ?>
                @foreach ($data as $key => $value)
                  <?php $no++; ?>
                  <tr>
                    <td><?php echo $no; ?></td>
                    <td>{{ $value->judul_artikel }}</td>
                    <td>{{ $value->isi_artikel }}</td>
                    <td><img src="{{ asset($value->gambar_artikel) }}" alt="" width="100px" height="50px"></td>
                    <td>
                      <button class="btn btn-primary" onclick="getData({{ $value->id_artikel }})" title="Edit Data Artikel"><i class="fa fa-pencil"></i></button>
                      <button class="btn btn-danger" onclick="hapus({{ $value->id_artikel }})" title="Hapus Data Artikel"><i class="fa fa-close"></i></button>
                    </td>
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>
          <!-- /.box-body -->
        </div>
      </div>
    </div>
  </section>
  <!-- /.content -->

  <!-- Add Form -->
  <div class="modal fade" id="modal-default">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <h4 class="modal-title">Tambah Artikel</h4>
        </div>
        <form action="" enctype="multipart/form-data" method="post">
          <div class="modal-body">
            <div class="form-group">
              <label>Judul Artikel</label>
              <input type="text" id="judul_artikel" name="judul_artikel" class="form-control">
            </div>
            <div class="form-group">
              <label>Isi Artikel</label>
              <input type="text" id="isi_artikel" name="isi_artikel" class="form-control">
            </div>
            <div class="form-group">
              <label>Gambar Artikel</label>
              <input type="file" id="gambar_artikel" name="gambar_artikel" class="form-control">
            </div>
          </div>
        </form>
        <div class="modal-footer">
          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary" onclick="tambah()">Simpan</button>
        </div>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>

  <!-- Edit Form -->
  <div class="modal fade" id="modal-default-edit">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <h4 class="modal-title">Edit Artikel</h4>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <div class="form-group">
              <label>Judul Artikel</label>
              <input type="hidden" id="id_artikel_edit" name="id_artikel_edit" class="form-control">
              <input type="text" id="judul_artikel_edit" name="judul_artikel_edit" class="form-control">
            </div>
            <div class="form-group">
              <label>Isi Artikel</label>
              <input type="text" id="isi_artikel_edit" name="isi_artikel_edit" class="form-control">
            </div>
            <div class="form-group">
              <label>Gambar Artikel</label>
              <input type="file" id="gambar_artikel_edit" name="gambar_artikel_edit" class="form-control">
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary" onclick="edit()">Ubah</button>
        </div>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
</div>

<!-- /.content-wrapper -->
@endsection