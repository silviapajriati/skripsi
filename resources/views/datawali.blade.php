@extends('layouts.app')

<script src="{{url('adminlte/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<script src="{{url('adminlte/bower_components/jquery-ui/jquery-ui.js')}}"></script>
<script src="{{url('adminlte/bower_components/jquery-ui/jquery-ui.min.js')}}"></script>
<script src="{{url('adminlte/bower_components/jquery/dist/jquery.min.js')}}"></script>
<script src="{{url('adminlte/bower_components/jquery-ui/jquery-ui.min.js')}}"></script>

<script src="{{url('js/jquery.js')}}"></script>
<script src="{{url('js/jquery.min.js')}}"></script>
<script src="{{url('js/jquery-ui.js')}}"></script>
<script src="{{url('js/jquery-1.8.2.js')}}"></script>
<script src="{{url('js/jquery-1.8.2.min.js')}}"></script>
<script src="{{url('js/jquery.form.js')}}"></script>

@section('content')
<section class="content-header">
      <h1>
        SIAKAD
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ URL::route('datawali') }}"><i class="fa fa-dashboard"></i> Kelola Wali Murid</a></li>
        <li class="active">Data Wali Murid</li>
      </ol>
    </section>
    <meta name="token" content="{{csrf_token()}}">

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Data Wali Murid</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
          <div class="container">
              <div class="card mt-5">
                <div class="card-body">
                    <a href="{{ url('/wali/create') }}" class="btn btn-primary">Input Data Wali Murid</a>
                    <br/>
                    <br/>
                    <form method="GET" action="{{ url('/wali') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
                        <div class="form-group">
                            <input type="text" class="form-control" name="search" placeholder="Search..." value="{{ request('search') }}">
                            <span class="input-group-append">
                                <button class="btn btn-secondary" type="submit">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                        </div>
                    </form>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>NIO</th>
                                <th>Nama</th>
                                <th>Alamat</th>
                                <th>Kontak</th>
                                <th>NIS</th>
                                <th>OPSI</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 0;?>
                            @foreach($data as $d)
                            <?php $no++ ;?>
                            <tr>
                                <td>{{ $no }}</td>
                                <td>{{ $d->nio }}</td>
                                <td>{{ $d->nama_ortu }}</td>
                                <td>{{ $d->alamat }}</td>
                                <td>{{ $d->no_telp }}</td>
                                <td>{{ $d->nis }}</td>
                                <td>
                                    <a href="{{ url('/wali/' . $d->nio . '/edit') }}" class="btn btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i>&nbsp;Edit</a>
                                    <form method="POST" action="{{ url('/wali' . '/' . $d->nio) }}" accept-charset="UTF-8" style="display:inline">
                                        {{ method_field('DELETE') }}
                                        {{ csrf_field() }}
                                        <button type="submit" class="btn btn-danger" title="Delete Data" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Hapus</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="pagination-wrapper"> {!! $data->appends(['search' => Request::get('search')])->render() !!} </div>
                </div>
              </div>
          </div>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

    </section>
@endsection


<script type="text/javascript">
$(document).ready(function(){

  console.log("Document Ready!!");

 
});


</script>