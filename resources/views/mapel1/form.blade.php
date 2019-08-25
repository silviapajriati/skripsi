<div class="form-body">
<div class="form-group {{ $errors->has('kode_mapel') ? 'has-error' : ''}}">
    <label class="col-md-2 control-label">{{ 'Kode Mapel' }}</label>
    <div class="col-md-3">
    <input type="text" class="form-control" placeholder="Kode Mapel" id="kode_mapel" name="kode_mapel" value="{{ isset($data->kode_mapel) ? $data->kode_mapel : ''}}"/>
    {!! $errors->first('kode_mapel', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('mapel') ? 'has-error' : ''}}">
    <label class="col-md-2 control-label">{{ 'Mapel' }}</label>
    <div class="col-md-3">	
    <input type="text" class="form-control" placeholder="Mapel" id="mapel" name="mapel" value="{{ isset($data->mapel) ? $data->mapel : ''}}"/>
    {!! $errors->first('mapel', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('kelas') ? 'has-error' : ''}}">
    <label class="col-md-2 control-label">{{ 'kelas' }}</label>
    <div class="col-md-3">	
    <input type="text" class="form-control" placeholder="kelas" id="kelas" name="kelas" value="{{ isset($data->kelas) ? $data->kelas : '1'}}" readonly/>
    {!! $errors->first('kelas', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group">
    <label class="col-md-2 control-label"></label>
    <div class="col-md-4">
        <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
    </div>
</div>
</div>