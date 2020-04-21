@extends('master')

<!-- Isi Title-->
@section('title','Tambah Data')

<!-- Isi bagian judul halaman-->
@section('judul_halaman','Tambah Data Mahasiswa')

<!-- Isi bagian konten-->
@section('konten')
    <a href="/mahasiswa" class="btn btn-danger">Kembali</a>
    <br/>
    <br/>
    <form action="/mahasiswa/simpan" method="post">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="namamhs">Nama</label>
            <input type="text" class="form-control" required="required" name="namamhs"> <br/>
        </div>
        <div class="form-group">
            <label for="nimmhs">NIM</label>
            <input type="text" class="form-control" required="required" name="nimmhs"> <br/>
        </div>
        <div class="form-group">
            <label for="emailmhs">E-mail</label>
            <input type="text" class="form-control" required="required" name="emailmhs"> <br/>
        </div>
        <div class="form-group">
            <label for="jurusanmhs">Jurusan</label>
            <input type="text" class="form-control" required="required" name="jurusanmhs"> <br/>
        </div>
        <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Data</button>
    </form>
    
    
    @endsection