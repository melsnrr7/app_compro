@extends('layouts.app')
@section('content')
<div class="card">
    <div class="card-header">{{$title}}</div>
        <div class="card-body">
            <form action="{{route('admin.pendidikans.store')}}" method="POST">
            @csrf
                <div class="form-group mb-3">
                    <label for="">Nama Universitas</label>
                    <input type="text" name="nama_univ" placeholder="Masukkan Nama Universitas" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="">Lulusan</label>
                    <input type="text" name="lulusan" placeholder="Masukkan Lulusan" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="">Jurusan</label>
                    <input type="text" name="jurusan" placeholder="Masukkan Jurusan" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="">GPA</label>
                    <input type="text" name="gpa" placeholder="Masukkan GPA" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="">Tanggal Lulus</label>
                    <input type="date" name="tgl_lulus" id="tgl_akhir">
                </div>
                <div class="form-group mb-3">
                    <label for="">Deskripsi</label>
                    <textarea name="description" id="" cols="30" rows="10" class="form-control"></textarea>
                </div>
                <div class="form-group mb-3">
                    <input type="submit" class="btn btn-primary" value="simpan">
                    <a href="{{url()->previous()}}" class="btn btn-danger">Kembali</a>
                </div>
            </form>
        </div>
    </div>
@endsection
