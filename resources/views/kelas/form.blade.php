<div class="form-body">
<div class="form-group {{ $errors->has('kode_kelas') ? 'has-error' : ''}}">
    <label class="col-md-2 control-label">{{ 'Kode Kelas' }}</label>
    <div class="col-md-3">
    <input type="text" class="form-control" placeholder="Kode Kelas" id="kode_kelas" name="kode_kelas" value="{{ isset($data->kode_kelas) ? $data->kode_kelas : ''}}"/>
    {!! $errors->first('kode_kelas', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('kelas') ? 'has-error' : ''}}">
    <label class="col-md-2 control-label">{{ 'Kelas' }}</label>
    <div class="col-md-3">	
    <input type="text" class="form-control" placeholder="Kelas" id="kelas" name="kelas" value="{{ isset($data->kelas) ? $data->kelas : ''}}"/>
    {!! $errors->first('kelas', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('sub_kelas') ? 'has-error' : ''}}">
    <label class="col-md-2 control-label">{{ 'Sub Kelas' }}</label>
    <div class="col-md-3">	
    <input type="text" class="form-control" placeholder="Sub Kelas" id="sub_kelas" name="sub_kelas" value="{{ isset($data->sub_kelas) ? $data->sub_kelas : ''}}"/>
    {!! $errors->first('sub_kelas', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group">
    <label class="col-md-2 control-label"></label>
    <div class="col-md-4">
        <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
    </div>
</div>
</div>