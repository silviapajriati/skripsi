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
        <li><a href="{{ URL::route('datajadwal1') }}"><i class="fa fa-dashboard"></i> Kelola Jadwal Pelajaran Kelas I</a></li>
        <li class="active">Data Jadwal Pelajaran Kelas I</li>
      </ol>
    </section>
    <meta name="token" content="{{csrf_token()}}">

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Data Jadwal Pelajaran Kelas I</h3>

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
                    <a href="{{ url('/jadwal1/create') }}" class="btn btn-primary">Input Jadwal Pelajaran</a>
                    <br/>
                    <br/>
                    <form method="GET" action="{{ url('/jadwal1') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
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
                                <th>Hari</th>
                                <th>Jam Mulai</th>
                                <th>Jam Selesai</th>
                                <th>Kode Kelas</th>
                                <th>Nama Mapel</th>
                                <th>Nama Guru</th>
                                <th>OPSI</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 0;?>
                            @foreach($data as $d)
                            <?php $no++ ;?>
                            <tr>
                                <td>{{ $no }}</td>
                                <td>{{ $d->hari }}</td>
                                <td>{{ $d->jam_mulai }}</td>
                                <td>{{ $d->jam_selesai }}</td>
                                <td>{{ $d->kode_kelas }}</td>
                                <td>{{ $d->mapel }}</td>
                                <td>{{ $d->nama_guru }}</td>
                                <td>
                                    <a href="{{ url('/jadwal1/' . $d->id_jadwal . '/edit') }}" class="btn btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i>&nbsp;Edit</a>
                                    <form method="POST" action="{{ url('/jadwal1' . '/' . $d->id_jadwal) }}" accept-charset="UTF-8" style="display:inline">
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