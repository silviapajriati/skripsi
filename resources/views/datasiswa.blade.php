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
        <li><a href="{{ URL::route('datasiswa') }}"><i class="fa fa-dashboard"></i> Kelola Siswa</a></li>
        <li class="active">Data Siswa</li>
      </ol>
    </section>
    <meta name="token" content="{{csrf_token()}}">

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Data Siswa</h3>

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
                    <a href="{{ url('/siswa/create') }}" class="btn btn-primary">Input Siswa Baru</a>
                    <br/>
                    <br/>
                    <form method="GET" action="{{ url('/siswa') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
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
                                <th>NIS</th>
                                <th>Nama</th>
                                <th>Tempat Lahir</th>
                                <th>Tanggal Lahir</th>
                                <th>Alamat</th>
                                <th>Kontak</th>
                                <th>OPSI</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 0;?>
                            @foreach($data as $d)
                            <?php $no++ ;?>
                            <tr>
                                <td>{{ $no }}</td>
                                <td>{{ $d->nis }}</td>
                                <td>{{ $d->nama_siswa }}</td>
                                <td>{{ $d->tempat_lahir }}</td>
                                <td>{{ $d->tanggal_lahir }}</td>
                                <td>{{ $d->alamat }}</td>
                                <td>{{ $d->no_telp }}</td>
                                <td>
                                    <a href="{{ url('/siswa/' . $d->id . '/edit') }}" class="btn btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i>&nbsp;Edit</a>
                                    <form method="POST" action="{{ url('/siswa' . '/' . $d->id) }}" accept-charset="UTF-8" style="display:inline">
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


<!-- Modal Add New -->
<!-- <div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
      <div class="modal-content">
          <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="span_title"></h4>
          </div>
          <div class="modal-body">
            <form method="POST" action="{{ url('/siswa') }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
            {{ csrf_field() }}
              <div class="form-body">
                <input type="text"  class="hidden" id="txt_id"/>
                <div class="form-group tight-bottom">
                  <label class="col-md-3 control-label">NIS</label>
                    <div class="col-md-8">	
                    <input type="text" class="form-control input-sm" placeholder="NIS" id="txt_nis" name="txt_nis" readonly />
                    </div>
                </div>
                <div class="form-group tight-bottom">
                  <label class="col-md-3 control-label">Nama Siswa</label>
                    <div class="col-md-8">	
                    <input type="text" class="form-control input-sm" placeholder="Nama Siswa" id="txt_nama" name="txt_nama" />
                    </div>
                </div>
                <div class="form-group tight-bottom">
                  <label class="col-md-3 control-label">Tempat Lahir</label>
                    <div class="col-md-8">	
                    <input type="text" class="form-control input-sm" placeholder="Tempat Lahir" id="txt_tempat" name="txt_tempat"/>
                    </div>
                </div>
                <div class="form-group tight-bottom">
									<label class="col-md-3 control-label">Tanggal Lahir</label>
									<div class="col-md-4">
										<div class="input-group input-small date date-picker" data-date-format="yyyy-mm-dd">
											<input type="date" id="txt_tgl" name="txt_tgl" class="form-control input-sm"  placeholder="Date" value="" data-date-format="yyyy-mm-dd">
											<span class="input-group-btn">
											<button class="btn default input-sm" type="button"><i class="fa fa-calendar"></i></button>
											</span>
										</div>
									</div>							
								</div>
                <div class="form-group tight-bottom">
                  <label class="col-md-3 control-label">No. Telp</label>
                    <div class="col-md-8">	
                    <input type="text" class="form-control input-sm" placeholder="No. Telp" id="txt_no" name="txt_no"/>
                    </div>
                </div>
                <div class="form-group tight-bottom">
									<label class="col-md-3 control-label">Alamat</label>
									<div class="col-sm-8">
										<textarea class="form-control" rows="3" placeholder="Alamat" name="txt_alamat" id="txt_alamat" value=""></textarea>
									</div>
								</div>
                <div class="form-group tight-bottom">
                  <label class="col-md-3 control-label">Nama Ibu</label>
                    <div class="col-md-8">	
                    <input type="text" class="form-control input-sm" placeholder="Nama Ibu" id="txt_ibu" name="txt_ibu"/>
                    </div>
                </div>
                <div class="form-group tight-bottom">
                  <label class="col-md-3 control-label">Nama Ayah</label>
                    <div class="col-md-8">	
                    <input type="text" class="form-control input-sm" placeholder="Nama Ayah" id="txt_ayah" name="txt_ayah"/>
                    </div>
                </div>
                <div class="row" id="save">
                  <div class="col-md-offset-4 col-md-4">
                    <div id="loading_control" style="display:none;text-align:center">
                      <img class="col-md-offset-0" src="img/pre_loader.gif" /><br/>
                      <span>Please Wait, Saving Data...</span>
                    </div>
                    <div id="action_control2">
                      <button type="submit"  class="btn blue">Save</button>
                      <button type="button" data-dismiss="modal" class="btn default">Cancel</button>
                    </div>                                
                  </div>
							  </div>
              </div>
            </form>
          </div>
      </div>
  </div>
</div> -->


<script type="text/javascript">
$(document).ready(function(){

  console.log("Document Ready!!");

  $('#btn_simpan').click(function(){

    // var pass = {'_token':$('meta[name="token"]').attr('content'),
    //             'MessageContent':document.getElementById("nis").value,
    // };

    $("#form_editing").ajaxSubmit({
      url:'{{url("/siswa")}}',
      type: 'post',
      // data:pass,
      success: function(){

        alert('New Data IT Project Successfully Added.', {title: 'Simpan Sukses.',titleClass: 'info', modal: true, buttons: [{id: 0, label:'OK', val: 'X'}],callback:function(){ window.setTimeout('window.location="DataSiswa"',500); }});
        window.location = 'DataSiswa';
      },
      error: function(){

        $("#loading_control").hide();
      }
    });

  });

});

  function adds(){
    $('#span_title').text("Input New Data");
  }


</script>