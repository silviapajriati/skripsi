<div class="form-body">
<div class="form-group {{ $errors->has('nis') ? 'has-error' : ''}}">
    <label class="col-md-2 control-label">{{ 'NIS' }}</label>
    <div class="col-md-3">
    <input type="text" class="form-control" placeholder="NIS" id="nis" name="nis" value="{{ isset($siswa->nis) ? $siswa->nis : ''}}"/>
    {!! $errors->first('nis', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('nama_siswa') ? 'has-error' : ''}}">
    <label class="col-md-2 control-label">{{ 'Nama Siswa' }}</label>
    <div class="col-md-3">	
    <input type="text" class="form-control" placeholder="Nama Siswa" id="nama_siswa" name="nama_siswa" value="{{ isset($siswa->nama_siswa) ? $siswa->nama_siswa : ''}}"/>
    {!! $errors->first('nama_siswa', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('tempat_lahir') ? 'has-error' : ''}}">
    <label class="col-md-2 control-label">{{ 'Tempat Lahir' }}</label>
    <div class="col-md-3">	
    <input type="text" class="form-control" placeholder="Tempat Lahir" id="tempat_lahir" name="tempat_lahir" value="{{ isset($siswa->tempat_lahir) ? $siswa->tempat_lahir : ''}}"/>
    {!! $errors->first('tempat_lahir', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('tanggal_lahir') ? 'has-error' : ''}}">
    <label class="col-md-2 control-label">{{ 'Tanggal Lahir' }}</label>
    <div class="col-md-3">	
    <input type="date" id="tanggal_lahir" name="tanggal_lahir" class="form-control input-sm"  placeholder="Tanggal Lahir" value="{{ isset($siswa->tanggal_lahir) ? $siswa->tanggal_lahir : ''}}" data-date-format="yyyy-mm-dd">
    {!! $errors->first('tanggal_lahir', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('no_telp') ? 'has-error' : ''}}">
    <label class="col-md-2 control-label">{{ 'No. Telp' }}</label>
    <div class="col-md-3">	
    <input type="text" class="form-control" placeholder="No. Telp" id="no_telp" name="no_telp" value="{{ isset($siswa->no_telp) ? $siswa->no_telp : ''}}"/>
    {!! $errors->first('no_telp', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('alamat') ? 'has-error' : ''}}">
    <label class="col-md-2 control-label">{{ 'Alamat' }}</label>
    <div class="col-md-3">	
    <input type="text" class="form-control" placeholder="Alamat" id="alamat" name="alamat" value="{{ isset($siswa->alamat) ? $siswa->alamat : ''}}"/>
    {!! $errors->first('alamat', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('nama_ibu') ? 'has-error' : ''}}">
    <label class="col-md-2 control-label">{{ 'Nama Ibu' }}</label>
    <div class="col-md-3">	
    <input type="text" class="form-control" placeholder="Nama Ibu" id="nama_ibu" name="nama_ibu" value="{{ isset($siswa->nama_ibu) ? $siswa->nama_ibu : ''}}"/>
    {!! $errors->first('nama_ibu', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('nama_ayah') ? 'has-error' : ''}}">
    <label class="col-md-2 control-label">{{ 'Nama Ayah' }}</label>
    <div class="col-md-3">	
    <input type="text" class="form-control" placeholder="Nama Ayah" id="nama_ayah" name="nama_ayah" value="{{ isset($siswa->nama_ayah) ? $siswa->nama_ayah : ''}}"/>
    {!! $errors->first('nama_ayah', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group">
    <label class="col-md-2 control-label"></label>
    <div class="col-md-4">
        <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
    </div>
</div>
</div>