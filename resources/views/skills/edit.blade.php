@extends('layouts.app')
@section('content')
<div class="card">
    <div class="card-header">{{$title}}</div>
        <div class="card-body">
            <form action="{{route('admin.skills.update', $edit->id)}}" method="POST">
                <form action="" method="POST">
                @csrf
                @method("PUT")
                <div class="form-group mb-3">
                    <label for="">Skill</label>
                    <input value="{{$edit->nama_skills}}" type="text" name="skills" placeholder="Masukkan Skill Anda" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="">Persen</label>
                    <input value="{{$edit->persen}}" type="text" name="persen" placeholder="Masukkan Berapa Persen Anda Menguasai Skill Ini" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <input type="submit" class="btn btn-primary" value="simpan">
                    <a href="{{url()->previous()}}" class="btn btn-danger">Kembali</a>
                </div>
            </form>
        </div>
    </div>
@endsection
