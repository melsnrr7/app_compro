@extends('layouts.app')
@section('content')
<div class="card">
    <div class="card-header">{{$title}}</div>
        <div class="card-body">
            <form action="{{route('admin.pengalamans.store')}}" method="POST">
            @csrf
                <div class="form-group mb-3">
                    <label for="">Nama Pekerjaan</label>
                    <input type="text" name="nama_pekerjaan" placeholder="Masukkan Nama Pekerjaan" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="">Perusahaan</label>
                    <input type="text" name="perusahaan" placeholder="Masukkan Nama Perusahaan" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="">Deskripsi</label>
                    <textarea name="deskripsi" id="" cols="30" rows="10" class="form-control"></textarea>
                </div>
                <div class="form-group mb-3">
                    <label for="">Tanggal Mulai</label>
                    <input type="date" name="tgl_mulai" id="tgl_mulai">
                </div>
                <div class="form-group mb-3">
                    <label for="">Tanggal Akhir</label>
                    <input type="date" name="tgl_akhir" id="tgl_akhir">
                </div>
                <div class="form-group mb-3">
                    <input type="submit" class="btn btn-primary" value="simpan">
                    <a href="{{url()->previous()}}" class="btn btn-danger">Kembali</a>
                </div>
            </form>
        </div>
    </div>
@endsection
