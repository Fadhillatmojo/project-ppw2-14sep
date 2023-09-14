@extends('master')
@section('body')
	@php
					use Carbon\Carbon;
	@endphp
	<h3>
		Data normal
	</h3>
<table border="1px" class="table table-bordered">

	<thead>
		<tr>
		<th>id</th>
		<th>Judul Buku</th>
		<th>Penulis</th>
		<th>Harga</th>
		<th>Tgl. Terbit</th>
		<th>Aksi</th>
	</tr>
</thead>
<tbody>
	@foreach ($data_buku as $buku)
	<tr>
			<td>{{ $buku->id }}</td>
			<td>{{ $buku->judul }}</td>
			<td>{{ $buku->penulis }}</td>
			<td>{{ "Rp ". number_format($buku->harga, 2, ',', '.') }}</td>
			<td>{{ Carbon::parse($buku->tgl_terbit)->format('d/m/Y') }}</td>
			<td><a href="#" id="edit">Edit</a> | <a href="#" id="delete">Delete</a></td>
		</tr>
		@endforeach
	</tbody>
</table>
<h3 class="mt-5">
	Sort by id terbesar Buku descending
</h3>
<table border="1px" class="table table-bordered">

	<thead>
		<tr>
		<th>no</th>
		<th>id</th>
		<th>Judul Buku</th>
		<th>Penulis</th>
		<th>Harga</th>
		<th>Tgl. Terbit</th>
		<th>Aksi</th>
	</tr>
</thead>
<tbody>
	@foreach ($data_buku_sort as $buku)
	<tr>
			<td>{{ $no++ }}</td>
			<td>{{ $buku->id }}</td>
			<td>{{ $buku->judul }}</td>
			<td>{{ $buku->penulis }}</td>
			<td>{{ "Rp ". number_format($buku->harga, 2, ',', '.') }}</td>
			<td>{{ Carbon::parse($buku->tgl_terbit)->format('d/m/Y') }}</td>
			<td><a href="#" id="edit">Edit</a> | <a href="#" id="delete">Delete</a></td>
		</tr>
		@endforeach
	</tbody>
</table>
<h3>
	Tugas Praktikum
</h3>
	<p>
		Ada {{ $count_data }} data dalam tabel Buku <br>
		Harga total dari {{ $count_data }} buah buku di atas adalah Rp {{ $sum_harga }}
	</p>
@endsection