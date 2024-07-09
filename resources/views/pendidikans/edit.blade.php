@extends('layouts.app')
@section('content')
<div class="card">
    <div class="card-header">{{$title}}</div>
        <div class="card-body">
            <form action="{{route('admin.pendidikans.update', $edit->id)}}" method="POST">
                <form action="" method="POST">
                @csrf
                @method("PUT")
                <div class="form-group mb-3">
                    <label for="">Nama Universitas</label>
                    <input value="{{$edit->nama_univ}}" type="text" name="nama_univ" placeholder="Masukkan Nama Universitas" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="">Lulusan</label>
                    <input value="{{$edit->lulusan}}" type="text" name="lulusan" placeholder="Masukkan Lulusan" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="">Jurusan</label>
                    <input value="{{$edit->jurusan}}" type="text" name="jurusan" placeholder="Masukkan Jurusan" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="">GPA</label>
                    <input value="{{$edit->gpa}}" type="text" name="gpa" placeholder="Masukkan GPA" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="">Tanggal Lulus</label>
                    <input value="{{$edit->tgl_lulus}}" type="date" name="tgl_lulus" id="tgl_akhir">
                </div>
                <div class="form-group mb-3">
                    <label for="">Deskripsi</label>
                    <textarea name="description" id="" cols="30" rows="10" class="form-control">{{$edit->description}}</textarea>
                </div>
                <div class="form-group mb-3">
                    <input type="submit" class="btn btn-primary" value="simpan">
                    <a href="{{url()->previous()}}" class="btn btn-danger">Kembali</a>
                </div>
            </form>
        </div>
    </div>
@endsection
