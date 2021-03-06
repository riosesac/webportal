@extends('admin.akun.home')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  @if(Session::has('pesan_sukses'))
    <div class="alert alert-success alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button> 
        <strong>{!! session('pesan_sukses') !!}</strong>
    </div>
  @endif
  @if(Session::has('pesan_error'))
    <div class="alert alert-danger alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button> 
        <strong>{!! session('pesan_error') !!}</strong>
    </div>
  @endif
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Foto</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Upload</a></li>
              <li class="breadcrumb-item active">Foto</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-xl">
                  Create
                </button>
              </div>
              <!-- /.card-header -->
              <div class="modal fade" id="modal-xl">
                <div class="modal-dialog modal-xl">
                  <form enctype="multipart/form-data" method="POST" action="{{url('/admin/develop/fotoku/create')}}">{{ csrf_field() }}
                  <div class="modal-content">
                    <div class="modal-header">
                      <h4 class="modal-title">Create Foto</h4>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                        <div class="card-body">
                          <div class="form-group">
                            <label for="exampleInputTittle">Judul</label>
                            <input type="text" class="form-control" id="exampleInputTittle" name="title" placeholder="Input Judul">
                          </div>
                          <div class="form-group input-group">
                            <select class="form-control select2" name="kategori" style="width: 50%;">
                              @foreach ($kategori as $item)
                              <option value="{{ $item->kategori }}">{{ $item->kategori }}</option>
                              @endforeach                              
                            </select>
                            <div class="input-group-prepend">
                              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-default">Add Kategori</button>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="exampleInputFile">Upload Foto</label>
                            <div class="input-group">
                              <div class="custom-file">
                                <input type="file" name="foto" class="custom-file-input" id="exampleInputFile">
                                <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                              </div>
                              <div class="input-group-append">
                                <span class="input-group-text">Upload</span>
                              </div>
                            </div>
                          </div>
                        </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                  </div>
                </form>
                  <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->

                <div class="modal fade" id="modal-default">
                  <div class="modal-dialog">
                  <form enctype="multipart/form-data" method="POST" action="{{url('/admin/develop/fotoku/kategori/create')}}">{{ csrf_field() }}
                      <div class="modal-content">
                        <div class="modal-header">
                          <h4 class="modal-title">Create Kategori</h4>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                            <div class="card-body">
                              <div class="form-group">
                                <label for="exampleInputKategori">Kategori</label>
                                <input type="text" class="form-control" id="exampleInputKategori" name="kategori" placeholder="Input Judul">
                              </div>
                            </div>
                        </div>
                        <div class="modal-footer justify-content-between">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                          <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                      </div>
                    </form>
                    <!-- /.modal-content -->
                  </div>
                  <!-- /.modal-dialog -->
                </div>
              </div>
              <!-- /.modal -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Judul</th>
                    <th>Foto</th>
                    <th>Kategori</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php $no = 1; ?>
                    @foreach ($foto as $data)      
                  <tr>
                    <td>{{$no++}}</td>
                    <td>{{$data->judul}}</td>
                    <td><img src="{!! url('foto/'.$data->foto) !!}" alt="foto" style="border: 3px solid;width: 100px;"></td>
                    <td>{{$data->kat}}</td>
                    <td>
                      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-xl{{$data->id}}">
                        Edit
                      </button>

                    <div class="modal fade" id="modal-xl{{$data->id}}">
                      <div class="modal-dialog modal-xl">
                        <form enctype="multipart/form-data" method="POST" action="{{url('/admin/develop/fotoku/update/'.$data->id)}}">{{ csrf_field() }}
                          <div class="modal-content">
                            <div class="modal-header">
                              <h4 class="modal-title">Update</h4>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                                <div class="card-body">
                                  <div class="form-group">
                                    <label for="exampleInputTittle">Judul</label>
                                    <input type="text" class="form-control" id="exampleInputTittle" name="title" value="{{$data->judul}}" placeholder="{{$data->judul}}">
                                  </div>
                                  <div class="form-group">
                                    <select class="form-control select2" name="kategori">
                                      @foreach ($kategori as $item)
                                      <option value="{{ $item->kategori }}">{{ $item->kategori }}</option>
                                      @endforeach                              
                                    </select>
                                  </div>
                                  <div class="form-group">
                                    <label for="exampleInputFile">Upload Foto</label>
                                    <div class="input-group">
                                      <div class="custom-file">
                                        <input type="file" name="foto" class="custom-file-input" id="exampleInputFile">
                                        <label class="custom-file-label" for="exampleInputFile">Input Ulang Foto</label>
                                      </div>
                                      <div class="input-group-append">
                                        <span class="input-group-text">Upload</span>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                            </div>
                            <div class="modal-footer justify-content-between">
                              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                              <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                          </div>
                        </form>
                        <!-- /.modal-content -->
                      </div>
                      <!-- /.modal-dialog -->
                    </div>
                  <a type="button" class="btn btn-danger" href="{{url('/admin/develop/fotoku/delete/'.$data->id)}}">Hapus</a>
                    </td>
                  </tr>
              
              <!-- /.modal -->
                    @endforeach
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>No</th>
                    <th>Judul</th>
                    <th>Foto</th>
                    <th>Kategori</th>
                    <th>Action</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection