@extends('layouts.main');
@section('title', 'Pengisian Formulir');
<br>
<br>
<br>
<br>

<br>
<div class="container">
<div class="judul">
    <h1>Pengisian Formulir ULT</h1>
</div>/
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Formulir Pelayanan</div>
 
                <div class="card-body">
                    <form method="POST" action="/proses">
                        @csrf
 
                        <div class="form-group">
                            <label>Nama Lengkap</label>
                            <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                        </div>
                        <div class="form-group">
                            <label>Alamat</label>
                            <textarea name="address" class="form-control" cols="30" rows="10">{{ old('address') }}</textarea>
                        </div>
                        <div class="form-group">
                            <label>Instansi</label>
                            <input type="/text" class="form-control" name="instansi" value="{{ old('instansi') }}">
                        </div>
                        <div class="form-group">
                            <label>No KTP / SIM</label>
                            <input type="text" class="form-control" name="noktp" value="{{ old('noktp') }}">
                        </div>
                        <div class="form-group">
                            <label>No Telepon</label>
                            <input type="text" class="form-control" name="notelp" value="{{ old('nohp') }}">
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control" name="email" value="{{ old('email') }}">
                        </div>
                        <div class="form-group">
                            <label>Pilih Loket atau Layanan yang dituju</label>
                            <select id="cmbobox" type="text" class="form-control" name="loket" value="{{ old('loket') }}">
                              <option></option>
                              @foreach($data as $d)
                              <option value="{{$d->id}}">{{$d->description}}</option>
                              @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Keperluan</label>
                            <textarea name="keperluan" class="form-control" cols="30" rows="10">{{ old('keperluan') }}</textarea>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-dark">Simpan</button>
                        </div>
 
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
    <script type="text/javascript">
        $("#cmbobox").select2({
              placeholder: 'Pilih Layanan',
              allowClear: true
          });
    </script>