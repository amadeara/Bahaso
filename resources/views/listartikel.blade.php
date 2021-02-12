@extends('layout/main')


@section('container')

<div class="row m-3" >
    <div class="col m-1">
        <input  type="button" value="Kembali ke halaman sebelumnya" style="" onclick="history.back()"/>
    </div>
</div>


<div class="container">
  <h1 class="card-title" style= "text-align:center">Artikel Kesehatan</h1>
  <div class="row">
  <table class="table">
  <thead>
    <tr>
      <th scope="col">No.</th>
      <th scope="col">Judul</th>
      <th scope="col">Deskripsi</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
  @foreach($article as $article)
  
  
    <tr>
      <td>{{ $article->id}}</td>
      <td>{{ $article->judul }}</td>
      <td>{{ $article->deskripsi }}</td>
      <td>
        <a href="/edit_article/{{ $article->id }}" class="btn btn-outline-primary">Edit</a>
        <a href="/delete_article/{{ $article->id }}" class="btn btn-outline-danger">Hapus</a>
      </td>
      
    </tr>
 
 
  @endforeach
  </tbody>
</table>
  
  
  </div>

    


</div>

@endsection