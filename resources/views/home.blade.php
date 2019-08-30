@extends('layouts.app')
<div class="row container col-md-12">
  <div class="container-fluid justify-content-center" style="margin-top:80px">
  	<div class="card">
	  	<div class="card-body">
	  		<a href="{{ route('people.create') }}" class="btn btn-primary">Tambah Data</a>
	  		<table class="table">
			  	<thead>
			  		<th>id</th>
			  		<th>Nama</th>
			  		<th>Kota</th>
			  		<th>Aksi</th>
			  	</thead>
			  	<tbody>
                    @foreach ($people as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->city->city_name }}</td>
                            <td>
                                <a href="{{ route('people.edit', $item->id) }}" class="btn btn-warning">Ubah</a>
                                <a href="{{ route('people.delete', $item->id) }}" class="btn btn-danger">Hapus</a>
                            </td>
                        </tr>
                    @endforeach
			  	</tbody>
            </table>
            {{ $people->links() }}
	  	</div>
	  </div>
  </div>
</div>
