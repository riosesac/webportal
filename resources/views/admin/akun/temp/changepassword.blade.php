@extends('admin.akun.home')
@section('content')
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
    <section class="content">
        <div class="container-fluid">
            <form enctype="multipart/form-data" method="POST" action="{{url('/admin/password/update')}}">{{ csrf_field() }}
                <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="modal-title">Change Password</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                      <div class="card-body">
                        <div class="form-group">
                          <label for="exampleInputKategori">New Password</label>
                          <input type="password" class="form-control" id="exampleInputKategori" name="password" placeholder="Input Password">
                        </div>
                      </div>
                  </div>
                  <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                  </div>
                </div>
              </form>
        </div>
    </section>
</div>
@endsection