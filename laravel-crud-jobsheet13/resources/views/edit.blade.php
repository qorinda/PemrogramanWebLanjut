@extends('master')

<!-- Isi Title-->
@section('title','Edit Data')

<!-- Isi bagian judul halaman-->
@section('judul_halaman','Edit Data Mahasiswa')

<!-- Isi bagian konten-->
@section('konten')
<a href="/mahasiswa" class="btn btn-danger">Kembali</a>
	<br/>
	<br/>

	@foreach($mahasiswa as $mhs)
	<form action="/mahasiswa/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $mhs->id }}"><br/>
		<div class="form-group">
			<label for="namamhs">Nama</label>
			<input type="text" name="namamhs" class="form-control" required="required" value="{{ $mhs->nama }}"> <br/>
		</div>
		<div class="form-group">
			<label for="nimmhs">NIM</label>
			<input type="number" name="nimmhs" class="form-control" required="required" value="{{ $mhs->nim }}"> <br/>
		</div>
		<div class="form-group">
			<label for="emailmhs">E-mail</label>
			<input type="email" name="emailmhs" class="form-control" required="required" value="{{ $mhs->email }}"> <br/>
		</div>
		<div class="form-group">
			<label for="jurusanmhs">Jurusan</label>
			<input type="text" name="jurusanmhs" class="form-control" required="required" value="{{ $mhs->jurusan }}"> <br/>
		</div>
		<button type="submit" name="tambah" class="btn btn-primary float-right">Simpan Data</button>
	</form>
    @endforeach
@endsection
