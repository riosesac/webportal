@extends('admin.akun.homeadmin')
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
              <h1 class="m-0">Artikel</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Upload</a></li>
                <li class="breadcrumb-item active">Artikel</li>
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
                    <form enctype="multipart/form-data" method="POST" action="{{url('/admin/admin/artikelku/create')}}">{{ csrf_field() }}
                    <div class="modal-content">
                      <div class="modal-header">
                        <h4 class="modal-title">Create Artikel</h4>
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
                              <textarea name="artikel" id="summernote">
                              </textarea>
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
                    <form enctype="multipart/form-data" method="POST" action="{{url('/admin/admin/artikelku/kategori/create')}}">{{ csrf_field() }}
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
                <section class="content">
                  <div class="card card-solid">
                    <div class="card-body pb-0">
                      <div class="row d-flex align-items-stretch">
                        <?php $no = 1; ?>
                        @foreach ($artikel as $data)
                        <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch">
                          <div class="card bg-light">
                            <div class="card-header text-muted border-bottom-0">
                              {{$no++}} 
                            </div>
                            <div class="card-body pt-0">
                              <div class="row">
                                <div class="col-7">
                                  <h2 class="lead"><b>{{$data->judul}}</b></h2>
                                  <p class="text-muted text-sm"><b>Kategori: </b> {{$data->kat}} </p>
                                  <ul class="ml-4 mb-0 fa-ul text-muted">
                                    {{ substr($data->artikel, 0, 30) }}
                                    <a type="button" class="btn-xs btn-primary" data-toggle="modal" data-target="#modal-xl{{$data->id}}">detail</a>
                                  </ul>
                                  {{-- ini detail --}}
                                  <div class="modal fade" id="modal-xl{{$data->id}}">
                                    <div class="modal-dialog modal-xl">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <h4 class="modal-title">{{$data->judul}}</h4>
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                          </button>
                                        </div>
                                        <div class="modal-body">
                                          <div>
                                            @if ($data->foto)
                                          <img src="{{ url('foto/'.$data->foto)}}" alt="user-avatar" class="img-square img-fluid">
                                          @else
                                          <img src="{{ url('image/default.png')}}" alt="user-avatar" class="img-square img-fluid">   
                                          @endif
                                          </div>
                                          {!! $data->artikel !!}
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  {{-- ini detail --}}
                                </div>
                                <div class="col-5 text-center">
                                  @if ($data->foto)
                                  <img src="{{ url('foto/'.$data->foto)}}" alt="user-avatar" class="img-square img-fluid">
                                  @else
                                  <img src="{{ url('image/default.png')}}" alt="user-avatar" class="img-square img-fluid">   
                                  @endif
                                </div>
                              </div>
                            </div>
                            <div class="card-footer">
                              <div class="text-right">
                                <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#modal-lg{{$data->id}}">
                                  Edit
                                </button>
                                <a type="button" class="btn btn-sm btn-danger" href="{{url('/admin/develop/artikelku/delete/'.$data->id)}}">Hapus</a>
                              </div>
          
                              <div class="modal fade" id="modal-lg{{$data->id}}">
                                <div class="modal-dialog modal-lg">
                                  <form enctype="multipart/form-data" method="POST" action="{{url('/admin/develop/artikelku/update/'.$data->id)}}">{{ csrf_field() }}
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
                                            <div class="form-group">
                                              <select class="form-control select2" name="kategori">
                                                @foreach ($kategori as $item)
                                                <option value="{{ $item->kategori }}">{{ $item->kategori }}</option>
                                                @endforeach                              
                                              </select>
                                            </div>
                                            <div class="form-group">
                                              <textarea name="artikel" class="form-control" id="summernotes">
                                                {{$data->artikel}}
                                              </textarea>
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
                          </div>
                        </div>
                        @endforeach
                      </div>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                      <nav aria-label="Contacts Page Navigation">
                        <ul class="pagination justify-content-center m-0">
                        <li class="page-item">{{ $artikel->links()}}</li>
                        </ul>
                      </nav>
                    </div>
                    <!-- /.card-footer -->
                  </div>
                  <!-- /.card -->
            
                </section>
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