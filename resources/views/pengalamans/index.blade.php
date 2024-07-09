@extends('layouts.app')
@section('content')
<div class="card">
    <div class="card-header">{{$title}}</div>
        <div class="card-body">
            <div align="right" class="mb-3">
                <a href="{{route('admin.pengalamans.create')}}" class="btn btn-primary">Tambah Pengalaman</a>
            </div>
            <div class="table-responsive">
                <table class="table table-border">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Pekerjaan</th>
                            <th>Perusahaan</th>
                            <th>Deskripsi</th>
                            <th>Tanggal Mulai</th>
                            <th>Tanggal Akhir</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $no=1; @endphp
                        @foreach ($datas as $data )

                        <tr>
                            <td>{{$no++}}</td>
                            <td>{{$data->nama_pekerjaan}}</td>
                            <td>{{$data->perusahaan}}</td>
                            <td>{{$data->deskripsi}}</td>
                            <td>{{$data->tgl_mulai}}</td>
                            <td>{{$data->tgl_akhir}}</td>
                            <td>
                                <a href="{{route('admin.pengalamans.edit', $data->id)}}" class="btn btn-success btn-sm">Edit</a>

                                <form method="POST" action="{{route('admin.pengalamans.destroy', $data->id)}}" class="d-inline">
                                @csrf
                                <input type="hidden" name="_method" value="DELETE">
                                <button class="btn btn-danger btn-sm" type="submit">Hapus</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
</div>
@endsection
