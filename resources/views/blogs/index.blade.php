@extends('layouts.main');
@section('title', 'CRUD Loket');
@section('content')
<br><br><br><br>
<div class="tabel">
    <div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="judul">
                <h1>DAFTAR LOKET</h1>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('blogs.create') }}"> Tambah Loket Baru</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Nama Loket</th>
            <th>Deskripsi Loket</th>
            <th width="250px">Action</th>
        </tr>
        @foreach ($blogs as $blog)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $blog->title }}</td>
            <td>{{ $blog->description }}</td>
            <td>
                <form action="{{ route('blogs.destroy',$blog->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('blogs.show',$blog->id) }}">Lihat</a>
    
                    <a class="btn btn-primary" href="{{ route('blogs.edit',$blog->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

    </div>
</div>
      
@endsection