<div class="form-body">
<div class="form-group {{ $errors->has('nip') ? 'has-error' : ''}}">
    <label class="col-md-2 control-label">{{ 'NIP' }}</label>
    <div class="col-md-3">
    <input type="text" class="form-control" placeholder="NIP" id="nip" name="nip" value="{{ isset($data->nip) ? $data->nip : ''}}"/>
    {!! $errors->first('nip', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('nama_guru') ? 'has-error' : ''}}">
    <label class="col-md-2 control-label">{{ 'Nama Guru' }}</label>
    <div class="col-md-3">	
    <input type="text" class="form-control" placeholder="Nama Guru" id="nama_guru" name="nama_guru" value="{{ isset($data->nama_guru) ? $data->nama_guru : ''}}"/>
    {!! $errors->first('nama_guru', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('tempat_lahir') ? 'has-error' : ''}}">
    <label class="col-md-2 control-label">{{ 'Tempat Lahir' }}</label>
    <div class="col-md-3">	
    <input type="text" class="form-control" placeholder="Tempat Lahir" id="tempat_lahir" name="tempat_lahir" value="{{ isset($data->tempat_lahir) ? $data->tempat_lahir : ''}}"/>
    {!! $errors->first('tempat_lahir', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('tanggal_lahir') ? 'has-error' : ''}}">
    <label class="col-md-2 control-label">{{ 'Tanggal Lahir' }}</label>
    <div class="col-md-3">	
    <input type="date" id="tanggal_lahir" name="tanggal_lahir" class="form-control input-sm"  placeholder="Tanggal Lahir" value="{{ isset($data->tanggal_lahir) ? $data->tanggal_lahir : ''}}" data-date-format="yyyy-mm-dd">
    {!! $errors->first('tanggal_lahir', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('no_telp') ? 'has-error' : ''}}">
    <label class="col-md-2 control-label">{{ 'No. Telp' }}</label>
    <div class="col-md-3">	
    <input type="text" class="form-control" placeholder="No. Telp" id="no_telp" name="no_telp" value="{{ isset($data->no_telp) ? $data->no_telp : ''}}"/>
    {!! $errors->first('no_telp', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('alamat') ? 'has-error' : ''}}">
    <label class="col-md-2 control-label">{{ 'Alamat' }}</label>
    <div class="col-md-3">	
    <input type="text" class="form-control" placeholder="Alamat" id="alamat" name="alamat" value="{{ isset($data->alamat) ? $data->alamat : ''}}"/>
    {!! $errors->first('alamat', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('status') ? 'has-error' : ''}}">
    <label class="col-md-2 control-label">{{ 'Status' }}</label>
    <div class="col-md-3">	
    <input type="text" class="form-control" placeholder="Status" id="status" name="status" value="{{ isset($data->status) ? $data->status : ''}}"/>
    {!! $errors->first('status', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('pendidikan') ? 'has-error' : ''}}">
    <label class="col-md-2 control-label">{{ 'Pendidikan' }}</label>
    <div class="col-md-3">	
    <input type="text" class="form-control" placeholder="Pendidikan" id="pendidikan" name="pendidikan" value="{{ isset($data->pendidikan) ? $data->pendidikan : ''}}"/>
    {!! $errors->first('pendidikan', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group">
    <label class="col-md-2 control-label"></label>
    <div class="col-md-4">
        <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
    </div>
</div>
</div>