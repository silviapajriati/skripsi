<div class="form-body">
<div class="form-group {{ $errors->has('nio') ? 'has-error' : ''}}">
    <label class="col-md-2 control-label">{{ 'NIO' }}</label>
    <div class="col-md-3">
    <input type="text" class="form-control" placeholder="NIO" id="nio" name="nio" value="{{ isset($data->nio) ? $data->nio : ''}}"/>
    {!! $errors->first('nio', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('nama_ortu') ? 'has-error' : ''}}">
    <label class="col-md-2 control-label">{{ 'Nama Wali' }}</label>
    <div class="col-md-3">	
    <input type="text" class="form-control" placeholder="Nama Wali" id="nama_ortu" name="nama_ortu" value="{{ isset($data->nama_ortu) ? $data->nama_ortu : ''}}"/>
    {!! $errors->first('nama_ortu', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('alamat') ? 'has-error' : ''}}">
    <label class="col-md-2 control-label">{{ 'Alamat' }}</label>
    <div class="col-md-3">	
    <input type="text" class="form-control" placeholder="Alamat" id="alamat" name="alamat" value="{{ isset($data->alamat) ? $data->alamat : ''}}"/>
    {!! $errors->first('alamat', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('no_telp') ? 'has-error' : ''}}">
    <label class="col-md-2 control-label">{{ 'No. Telp' }}</label>
    <div class="col-md-3">	
    <input type="text" class="form-control" placeholder="No. Telp" id="no_telp" name="no_telp" value="{{ isset($data->no_telp) ? $data->no_telp : ''}}"/>
    {!! $errors->first('no_telp', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('nis') ? 'has-error' : ''}}">
    <label class="col-md-2 control-label">{{ 'NIS' }}</label>
    <div class="col-md-3">	
    <input type="text" class="form-control" placeholder="NIS" id="nis" name="nis" value="{{ isset($data->nis) ? $data->nis : ''}}"/>
    {!! $errors->first('nis', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group">
    <label class="col-md-2 control-label"></label>
    <div class="col-md-4">
        <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
    </div>
</div>
</div>