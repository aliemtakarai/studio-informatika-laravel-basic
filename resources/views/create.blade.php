@extends('layouts.app')
<div class="row container col-md-12">
  <div class="container-fluid justify-content-center" style="margin-top:80px">
  	<div class="card">
	  	<div class="card-body">
	  		<form action="{{ route('people.store') }}" method="post">
                @csrf
                <div class="form-group">
                    <label>Nama</label>
                    <input type="text" name="name" class="form-control" placeholder="Masukkan Nama">
                </div>
                <div class="fomr-group">
                    <label>Kota</label>
                    <select name="city" class="form-control">
                        <option hidden>Pilih Kota</option>
                        @foreach ($cities as $city)
                            <option value="{{ $city->id }}">{{ $city->city_name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group" style="margin-top:10">
                    <a href="{{ url()->previous() }}" class="btn btn-info">Kembali</a>
                    <input type="submit" value="Simpan" class="btn btn-primary">
                </div>
            </form>
	  	</div>
	  </div>
  </div>
</div>
