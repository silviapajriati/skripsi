<div class="form-body">
<div class="form-group {{ $errors->has('judul') ? 'has-error' : ''}}">
    <label class="col-md-2 control-label">{{ 'Judul' }}</label>
    <div class="col-md-3">
    <input type="text" class="form-control" placeholder="Judul" id="judul" name="judul" value="{{ isset($data->judul) ? $data->judul : ''}}"/>
    {!! $errors->first('judul', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('detail') ? 'has-error' : ''}}">
    <label class="col-md-2 control-label">{{ 'Detail' }}</label>
    <div class="col-md-3">	
    <input type="text" class="form-control" placeholder="Detail" id="detail" name="detail" value="{{ isset($data->detail) ? $data->detail : ''}}"/>
    {!! $errors->first('detail', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('tgl') ? 'has-error' : ''}}">
    <label class="col-md-2 control-label">{{ 'Tanggal' }}</label>
    <div class="col-md-3">	
    <input type="date" id="tgl" name="tgl" class="form-control input-sm"  placeholder="Tanggal" value="{{ isset($data->tgl) ? $data->tgl : ''}}" data-date-format="yyyy-mm-dd">
    {!! $errors->first('tgl', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group">
    <label class="col-md-2 control-label"></label>
    <div class="col-md-4">
        <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
    </div>
</div>
</div>