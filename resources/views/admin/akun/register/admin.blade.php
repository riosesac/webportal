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
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Register</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Account</a></li>
              <li class="breadcrumb-item active">Register</li>
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
                {{-- <h3 class="card-title">Data User</h3> --}}
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-default">
                  Create
                </button>
              </div>
              <!-- /.card-header -->
              <div class="modal fade" id="modal-default">
                <div class="modal-dialog">
                  <form enctype="multipart/form-data" method="POST" action="{{ url('/admin/develop/register/create')}}">{{ csrf_field() }}
                  <div class="modal-content">
                    <div class="modal-header">
                      <h4 class="modal-title">Create User</h4>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                        <div class="card-body">
                          <div class="form-group">
                            <label for="exampleInputUsername">Username</label>
                            <input type="text" class="form-control" id="exampleInputUsername" name="username" placeholder="Input Username">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail">Email</label>
                            <input type="email" class="form-control" id="exampleInputEmail" name="email" placeholder="Input Email">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputPassword">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword" name="password" placeholder="Input Password">
                          </div>
                          <div class="form-group">
                            <label>Role User</label>
                            <select class="form-control select2" name="role" style="width: 100%;">
                              <option value="admin" selected="selected">Admin</option>
                              <option value="user">User</option>
                            </select>
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
              <!-- /.modal -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php $no = 1; ?>
                    @foreach ($users as $user)      
                  <tr>
                    <td>{{$no++}}</td>
                    <td>{{$user->username}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->role}}</td>
                    <td>
                      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-default{{$user->id}}">
                        Edit
                      </button>
                    <a type="button" class="btn btn-danger" href="{{ url('/admin/develop/register/delete/'.$user->id)}}">Hapus</a>
                    </td>
                  </tr>

              <div class="modal fade" id="modal-default{{$user->id}}">
                <div class="modal-dialog">
                  <form enctype="multipart/form-data" method="POST" action="{{ url('/admin/develop/register/update/'.$user->id)}}">{{ csrf_field() }}
                  <div class="modal-content">
                    <div class="modal-header">
                      <h4 class="modal-title">Create User</h4>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                        <div class="card-body">
                          <div class="form-group">
                            <label for="exampleInputUsername">Username</label>
                            <input type="text" class="form-control" id="exampleInputUsername" name="username" value="{{$user->username}}" placeholder="{{$user->username}}">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail">Email</label>
                            <input type="email" class="form-control" id="exampleInputEmail" name="email" value="{{$user->email}}" placeholder="{{$user->email}}">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputPassword">Password</label>
                            <input type="password" class="form-control" name="password" id="exampleInputPassword" placeholder="Input Password">
                          </div>
                          <div class="form-group">
                            <label>Role User</label>
                            <select class="form-control select2" name="role" style="width: 100%;">
                              <option value="admin" selected="selected">Admin</option>
                              <option value="user">User</option>
                            </select>
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
              <!-- /.modal -->
                    @endforeach
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>No</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Role</th>
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